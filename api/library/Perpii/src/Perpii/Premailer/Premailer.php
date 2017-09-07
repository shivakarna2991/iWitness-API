<?php
namespace Perpii\Premailer {
    // Ensure ruby script is executable
    use Exception;

    if (!is_executable(dirname(__FILE__) . '/converter.rb')) {
        throw new Exception(
            'converter.rb must be executable (eg. sudo chmod 0755 converter.rb)'
        );
    }

    /**
     * Premailer
     *
     * @todo    Note to self: test this again after you rebuild the dev server.
     *          Ensure you do *not* install the hpricot gem. See if that was in
     *          fact a dependency. That may be the cause of the inconsistancy
     *          with the remove_classes and remove_ids arguments.
     *          Okay; I did this. No luck :(
     * @note    If ruby conversion file is named premailer.rb, it'll conflict
     *          with the library
     * @author  Oliver Nassar <onassar@gmail.com>
     * @see     https://github.com/alexdunae/premailer/
     * @see     http://premailer.dialect.ca/
     */
    class Premailer
    {
        /**
         * _arguments
         *
         * @note   Not all ruby options are supported (yet)
         * @see    https://github.com/alexdunae/premailer/blob/master/lib/premailer/premailer.rb#L164
         * @var    array
         * @access protected
         */
        protected $_arguments = array(
            'css_to_attributes'     => true,
            'include_link_tags'     => true,
            'include_style_tags'    => true,
            'input_encoding'        => 'ASCII-8BIT',
            'preserve_reset'        => true,
            'preserve_styles'       => false,
            'remove_classes'        => true, // Some servers bugged outwhen this was on
            'remove_comments'       => false, // email fallback use this, please consider
            'remove_ids'            => false, // Some servers bugged outwhen this was on
            'remove_scripts'        => true,
            'replace_html_entities' => false
        );

        /**
         * _markup
         *
         * @var    string
         * @access protected
         */
        protected $_markup;

        /**
         * _notSupported
         *
         * Separate array to remind me of the outstanding arguments to support
         *
         * @var    array
         * @return $this
         * @access protected
         */

        public function setCssPath($path)
        {
            $this->setArgument('css', $path);
            return $this;
        }

        /**
         * __construct
         *
         * @access public
         * @internal param string $markup
         * @return \Perpii\Premailer\Premailer
         */
        public function __construct()
        {
            $this->_arguments['with_html_string'] = true;
        }

        public function setMarkup($markup)
        {
            $this->_markup = $markup;

            return $this;
        }

        /**
         * _getArgumentString
         *
         * @see    http://rubyforge.org/docman/view.php/735/281/README.html
         * @access protected
         * @return string
         */
        protected function _getArgumentString()
        {
            // Set up the argument string, and escape the markup
            $str           = '';
            $escapedMarkup = str_replace('"', '\"', $this->_markup);
            $str .= '--markup "' . ($escapedMarkup) . '"';

            // Loop over arguments; if boolean and true, set
            foreach ($this->_arguments as $name => $value) {
                if (is_bool($value)) {
                    if ($value === true) {
                        $str .= ' --' . ($name);
                    }
                } else {
                    $str .= ' --' . ($name) . ' ' . ($value);
                }
            }

            // Return for exec
            return $str;
        }

        /**
         * setArgument
         *
         * @see    https://github.com/alexdunae/premailer/blob/master/lib/premailer/premailer.rb#L164
         * @access public
         * @param  string $name
         * @param  string $value
         * @return $this
         */
        public function setArgument($name, $value)
        {
            $this->_arguments[$name] = $value;
            return $this;
        }

        /**
         * getConvertedHtml
         *
         * @access public
         * @throws Exception
         * @return string
         */
        public function getConvertedHtml()
        {
            $scriptPath = dirname(__FILE__) . '/converter.rb';
            $output     = array();
            $returnVar  = 0;
            $command    = ($scriptPath) . ' ' . $this->_getArgumentString();
            $response   = exec($command, $output, $returnVar);
            if ($returnVar === 1) {
                throw new Exception('Premailer or getopt gems not installed');
            }

            return implode("\n", $output);
        }
    }
}
