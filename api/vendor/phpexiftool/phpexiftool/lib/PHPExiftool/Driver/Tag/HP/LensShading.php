<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\HP;

use PHPExiftool\Driver\AbstractTag;

class LensShading extends AbstractTag
{

    protected $Id = 'Lens Shading';

    protected $Name = 'LensShading';

    protected $FullName = 'HP::Type2';

    protected $GroupName = 'HP';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'HP';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Lens Shading';

    protected $flag_Permanent = true;

}
