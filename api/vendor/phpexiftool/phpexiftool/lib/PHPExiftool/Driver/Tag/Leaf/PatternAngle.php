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

class PatternAngle extends AbstractTag
{

    protected $Id = 'pattern_ratation_angle';

    protected $Name = 'PatternAngle';

    protected $FullName = 'Leaf::Main';

    protected $GroupName = 'Leaf';

    protected $g0 = 'Leaf';

    protected $g1 = 'Leaf';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Pattern Rotation Angle';

}
