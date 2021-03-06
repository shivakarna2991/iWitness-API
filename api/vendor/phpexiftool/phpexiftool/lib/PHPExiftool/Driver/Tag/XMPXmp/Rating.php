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

class Rating extends AbstractTag
{

    protected $Id = 'Rating';

    protected $Name = 'Rating';

    protected $FullName = 'XMP::xmp';

    protected $GroupName = 'XMP-xmp';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmp';

    protected $g2 = 'Image';

    protected $Type = 'real';

    protected $Writable = true;

    protected $Description = 'Rating';

}
