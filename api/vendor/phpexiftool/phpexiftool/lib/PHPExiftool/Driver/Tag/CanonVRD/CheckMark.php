<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonVRD;

use PHPExiftool\Driver\AbstractTag;

class CheckMark extends AbstractTag
{

    protected $Id = 618;

    protected $Name = 'CheckMark';

    protected $FullName = 'CanonVRD::Ver1';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Check Mark';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Clear',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 1,
        ),
        2 => array(
            'Id' => 2,
            'Label' => 2,
        ),
        3 => array(
            'Id' => 3,
            'Label' => 3,
        ),
    );

}
