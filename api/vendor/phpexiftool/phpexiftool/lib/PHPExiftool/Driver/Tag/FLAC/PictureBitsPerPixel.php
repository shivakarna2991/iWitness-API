<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FLAC;

use PHPExiftool\Driver\AbstractTag;

class PictureBitsPerPixel extends AbstractTag
{

    protected $Id = 5;

    protected $Name = 'PictureBitsPerPixel';

    protected $FullName = 'FLAC::Picture';

    protected $GroupName = 'FLAC';

    protected $g0 = 'FLAC';

    protected $g1 = 'FLAC';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Picture Bits Per Pixel';

}
