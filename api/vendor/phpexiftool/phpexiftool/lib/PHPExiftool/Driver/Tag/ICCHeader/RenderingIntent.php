<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ICCHeader;

use PHPExiftool\Driver\AbstractTag;

class RenderingIntent extends AbstractTag
{

    protected $Id = 64;

    protected $Name = 'RenderingIntent';

    protected $FullName = 'ICC_Profile::Header';

    protected $GroupName = 'ICC-header';

    protected $g0 = 'ICC_Profile';

    protected $g1 = 'ICC-header';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'Rendering Intent';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Perceptual',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Media-Relative Colorimetric',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Saturation',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'ICC-Absolute Colorimetric',
        ),
    );

}
