<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPExif;

use PHPExiftool\Driver\AbstractTag;

class FlashFired extends AbstractTag
{

    protected $Id = 'FlashFired';

    protected $Name = 'FlashFired';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'boolean';

    protected $Writable = true;

    protected $Description = 'Flash Fired';

    protected $local_g2 = 'Camera';

}
