<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FlashPix;

use PHPExiftool\Driver\AbstractTag;

class ExposureIndex extends AbstractTag
{

    protected $Id = 620757008;

    protected $Name = 'ExposureIndex';

    protected $FullName = 'FlashPix::ImageInfo';

    protected $GroupName = 'FlashPix';

    protected $g0 = 'FlashPix';

    protected $g1 = 'FlashPix';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Exposure Index';

}
