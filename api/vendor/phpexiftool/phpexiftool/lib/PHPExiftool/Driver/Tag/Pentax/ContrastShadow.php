<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

use PHPExiftool\Driver\AbstractTag;

class ContrastShadow extends AbstractTag
{

    protected $Id = 110;

    protected $Name = 'ContrastShadow';

    protected $FullName = 'Pentax::Main';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Contrast Shadow';

    protected $flag_Permanent = true;

    protected $Values = array(
        '-1 0' => array(
            'Id' => '-1 0',
            'Label' => '-1',
        ),
        '-2 0' => array(
            'Id' => '-2 0',
            'Label' => '-2',
        ),
        '-3 0' => array(
            'Id' => '-3 0',
            'Label' => '-3',
        ),
        '-4 0' => array(
            'Id' => '-4 0',
            'Label' => '-4',
        ),
        '0 0' => array(
            'Id' => '0 0',
            'Label' => 0,
        ),
        '1 0' => array(
            'Id' => '1 0',
            'Label' => 1,
        ),
        '2 0' => array(
            'Id' => '2 0',
            'Label' => 2,
        ),
        '3 0' => array(
            'Id' => '3 0',
            'Label' => 3,
        ),
        '4 0' => array(
            'Id' => '4 0',
            'Label' => 4,
        ),
    );

}
