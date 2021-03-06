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

class MultiSelector extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'MultiSelector';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Multi Selector';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Do Nothing',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Reset Meter-off Delay',
        ),
    );

}
