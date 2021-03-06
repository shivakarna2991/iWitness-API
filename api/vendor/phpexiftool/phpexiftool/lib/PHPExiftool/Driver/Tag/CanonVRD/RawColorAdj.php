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

class RawColorAdj extends AbstractTag
{

    protected $Id = 46;

    protected $Name = 'RawColorAdj';

    protected $FullName = 'CanonVRD::Ver1';

    protected $GroupName = 'CanonVRD';

    protected $g0 = 'CanonVRD';

    protected $g1 = 'CanonVRD';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Raw Color Adj';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Shot Settings',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Faithful',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Custom',
        ),
    );

}
