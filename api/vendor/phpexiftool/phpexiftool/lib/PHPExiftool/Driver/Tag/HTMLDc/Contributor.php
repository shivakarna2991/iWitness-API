<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\HTMLDc;

use PHPExiftool\Driver\AbstractTag;

class Contributor extends AbstractTag
{

    protected $Id = 'contributor';

    protected $Name = 'Contributor';

    protected $FullName = 'HTML::dc';

    protected $GroupName = 'HTML-dc';

    protected $g0 = 'HTML';

    protected $g1 = 'HTML-dc';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Contributor';

    protected $local_g2 = 'Author';

    protected $flag_List = true;

    protected $flag_Bag = true;

}
