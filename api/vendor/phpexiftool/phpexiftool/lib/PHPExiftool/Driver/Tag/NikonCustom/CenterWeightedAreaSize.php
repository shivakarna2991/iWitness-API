<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCustom;

use PHPExiftool\Driver\AbstractTag;

class CenterWeightedAreaSize extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'CenterWeightedAreaSize';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Center Weighted Area Size';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => '8 mm',
        ),
        1 => array(
            'Id' => 32,
            'Label' => '12 mm',
        ),
        2 => array(
            'Id' => 64,
            'Label' => '15 mm',
        ),
        3 => array(
            'Id' => 96,
            'Label' => '20 mm',
        ),
        4 => array(
            'Id' => 128,
            'Label' => 'Average',
        ),
        5 => array(
            'Id' => 0,
            'Label' => '6 mm',
        ),
        6 => array(
            'Id' => 32,
            'Label' => '8 mm',
        ),
        7 => array(
            'Id' => 64,
            'Label' => '10 mm',
        ),
        8 => array(
            'Id' => 96,
            'Label' => '13 mm',
        ),
        9 => array(
            'Id' => 128,
            'Label' => 'Average',
        ),
        10 => array(
            'Id' => 0,
            'Label' => '8 mm',
        ),
        11 => array(
            'Id' => 16,
            'Label' => '12 mm',
        ),
        12 => array(
            'Id' => 32,
            'Label' => '15 mm',
        ),
        13 => array(
            'Id' => 48,
            'Label' => '20 mm',
        ),
        14 => array(
            'Id' => 64,
            'Label' => 'Average',
        ),
        15 => array(
            'Id' => 0,
            'Label' => '6 mm',
        ),
        16 => array(
            'Id' => 32,
            'Label' => '8 mm',
        ),
        17 => array(
            'Id' => 64,
            'Label' => '10 mm',
        ),
        18 => array(
            'Id' => 96,
            'Label' => '13 mm',
        ),
        19 => array(
            'Id' => 128,
            'Label' => 'Average',
        ),
        20 => array(
            'Id' => 0,
            'Label' => '6 mm',
        ),
        21 => array(
            'Id' => 4,
            'Label' => '8 mm',
        ),
        22 => array(
            'Id' => 8,
            'Label' => '10 mm',
        ),
        23 => array(
            'Id' => 0,
            'Label' => '6 mm',
        ),
        24 => array(
            'Id' => 32,
            'Label' => '8 mm',
        ),
        25 => array(
            'Id' => 64,
            'Label' => '10 mm',
        ),
    );

    protected $Index = 'mixed';

}
