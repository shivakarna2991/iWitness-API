<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Olympus;

use PHPExiftool\Driver\AbstractTag;

class WhiteBalance2 extends AbstractTag
{

    protected $Id = 1280;

    protected $Name = 'WhiteBalance2';

    protected $FullName = 'Olympus::CameraSettings';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'White Balance 2';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        16 => array(
            'Id' => 16,
            'Label' => '7500K (Fine Weather with Shade)',
        ),
        17 => array(
            'Id' => 17,
            'Label' => '6000K (Cloudy)',
        ),
        18 => array(
            'Id' => 18,
            'Label' => '5300K (Fine Weather)',
        ),
        20 => array(
            'Id' => 20,
            'Label' => '3000K (Tungsten light)',
        ),
        21 => array(
            'Id' => 21,
            'Label' => '3600K (Tungsten light-like)',
        ),
        33 => array(
            'Id' => 33,
            'Label' => '6600K (Daylight fluorescent)',
        ),
        34 => array(
            'Id' => 34,
            'Label' => '4500K (Neutral white fluorescent)',
        ),
        35 => array(
            'Id' => 35,
            'Label' => '4000K (Cool white fluorescent)',
        ),
        48 => array(
            'Id' => 48,
            'Label' => '3600K (Tungsten light-like)',
        ),
        256 => array(
            'Id' => 256,
            'Label' => 'Custom WB 1',
        ),
        257 => array(
            'Id' => 257,
            'Label' => 'Custom WB 2',
        ),
        258 => array(
            'Id' => 258,
            'Label' => 'Custom WB 3',
        ),
        259 => array(
            'Id' => 259,
            'Label' => 'Custom WB 4',
        ),
        512 => array(
            'Id' => 512,
            'Label' => 'Custom WB 5400K',
        ),
        513 => array(
            'Id' => 513,
            'Label' => 'Custom WB 2900K',
        ),
        514 => array(
            'Id' => 514,
            'Label' => 'Custom WB 8000K',
        ),
    );

}
