<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

use PHPExiftool\Driver\AbstractTag;

class WBRGGBLevelsUnknown18 extends AbstractTag
{

    protected $Id = 198;

    protected $Name = 'WB_RGGBLevelsUnknown18';

    protected $FullName = 'Canon::ColorData7';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'WB RGGB Levels Unknown 18';

    protected $flag_Permanent = true;

    protected $MaxLength = 4;

}
