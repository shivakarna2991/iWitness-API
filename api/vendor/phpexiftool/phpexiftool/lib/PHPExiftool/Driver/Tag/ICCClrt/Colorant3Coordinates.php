<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ICCClrt;

use PHPExiftool\Driver\AbstractTag;

class Colorant3Coordinates extends AbstractTag
{

    protected $Id = 120;

    protected $Name = 'Colorant3Coordinates';

    protected $FullName = 'ICC_Profile::ColorantTable';

    protected $GroupName = 'ICC-clrt';

    protected $g0 = 'ICC_Profile';

    protected $g1 = 'ICC-clrt';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Colorant 3 Coordinates';

    protected $MaxLength = 3;

}
