<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Leaf;

use PHPExiftool\Driver\AbstractTag;

class ToneMatrix extends AbstractTag
{

    protected $Id = 'icc_camera_to_tone_matrix';

    protected $Name = 'ToneMatrix';

    protected $FullName = 'Leaf::Main';

    protected $GroupName = 'Leaf';

    protected $g0 = 'Leaf';

    protected $g1 = 'Leaf';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'ICC To Tone Matrix';

    protected $flag_Binary = true;

}
