<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Panasonic;

use PHPExiftool\Driver\AbstractTag;

class ProgramISO extends AbstractTag
{

    protected $Id = 60;

    protected $Name = 'ProgramISO';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Program ISO';

    protected $flag_Permanent = true;

    protected $Values = array(
        65534 => array(
            'Id' => 65534,
            'Label' => 'Intelligent ISO',
        ),
        65535 => array(
            'Id' => 65535,
            'Label' => 'n/a',
        ),
    );

}
