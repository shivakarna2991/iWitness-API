<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCapture;

use PHPExiftool\Driver\AbstractTag;

class ColorNoiseReductionSharpness extends AbstractTag
{

    protected $Id = 28;

    protected $Name = 'ColorNoiseReductionSharpness';

    protected $FullName = 'NikonCapture::NoiseReduction';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Color Noise Reduction Sharpness';

    protected $flag_Permanent = true;

}
