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

class CommandDials extends AbstractTag
{

    protected $Id = '5.1';

    protected $Name = 'CommandDials';

    protected $FullName = 'NikonCustom::SettingsD80';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Command Dials';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard (Main Shutter, Sub Aperture)',
        ),
        128 => array(
            'Id' => 128,
            'Label' => 'Reversed (Main Aperture, Sub Shutter)',
        ),
    );

}
