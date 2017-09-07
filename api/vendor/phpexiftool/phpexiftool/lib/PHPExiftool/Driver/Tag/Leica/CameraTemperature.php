<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Leica;

use PHPExiftool\Driver\AbstractTag;

class CameraTemperature extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'CameraTemperature';

    protected $FullName = 'mixed';

    protected $GroupName = 'Leica';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Leica';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Camera Temperature';

    protected $flag_Permanent = true;

}