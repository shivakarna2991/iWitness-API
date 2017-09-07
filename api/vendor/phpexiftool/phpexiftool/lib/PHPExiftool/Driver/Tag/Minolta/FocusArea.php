<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Minolta;

use PHPExiftool\Driver\AbstractTag;

class FocusArea extends AbstractTag
{

    protected $Id = 49;

    protected $Name = 'FocusArea';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Focus Area';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Wide Focus (normal)',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Spot Focus',
        ),
    );

}
