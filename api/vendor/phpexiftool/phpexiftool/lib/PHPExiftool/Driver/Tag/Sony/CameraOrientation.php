<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

use PHPExiftool\Driver\AbstractTag;

class CameraOrientation extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'CameraOrientation';

    protected $FullName = 'mixed';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'mixed';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Camera Orientation';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Horizontal (normal)',
        ),
        1 => array(
            'Id' => 16,
            'Label' => 'Rotate 90 CW',
        ),
        2 => array(
            'Id' => 32,
            'Label' => 'Rotate 270 CW',
        ),
        3 => array(
            'Id' => 1,
            'Label' => 'Horizontal (normal)',
        ),
        4 => array(
            'Id' => 6,
            'Label' => 'Rotate 90 CW',
        ),
        5 => array(
            'Id' => 8,
            'Label' => 'Rotate 270 CW',
        ),
    );

}
