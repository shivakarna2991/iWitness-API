<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPXmp;

use PHPExiftool\Driver\AbstractTag;

class PageImageWidth extends AbstractTag
{

    protected $Id = 'PageInfoWidth';

    protected $Name = 'PageImageWidth';

    protected $FullName = 'XMP::xmp';

    protected $GroupName = 'XMP-xmp';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmp';

    protected $g2 = 'Image';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Page Image Width';

    protected $flag_List = true;

}
