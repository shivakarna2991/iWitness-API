<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ExifIFD;

use PHPExiftool\Driver\AbstractTag;

class AlphaDataDiscard extends AbstractTag
{

    protected $Id = 48325;

    protected $Name = 'AlphaDataDiscard';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'ExifIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Alpha Data Discard';

    protected $local_g1 = 'ExifIFD';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Full Resolution',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Flexbits Discarded',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'HighPass Frequency Data Discarded',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Highpass and LowPass Frequency Data Discarded',
        ),
    );

}
