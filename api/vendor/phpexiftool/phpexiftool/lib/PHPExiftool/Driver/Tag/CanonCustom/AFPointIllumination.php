<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonCustom;

use PHPExiftool\Driver\AbstractTag;

class AFPointIllumination extends AbstractTag
{

    protected $Id = 10;

    protected $Name = 'AFPointIllumination';

    protected $FullName = 'CanonCustom::Functions1D';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'AF Point Illumination';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'On',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On without dimming',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Brighter',
        ),
    );

}
