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

class ToneCurveMode extends AbstractTag
{

    protected $Id = 275;

    protected $Name = 'ToneCurveMode';

    protected $FullName = 'CanonVRD::Ver1';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Tone Curve Mode';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'RGB',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Luminance',
        ),
    );

}
