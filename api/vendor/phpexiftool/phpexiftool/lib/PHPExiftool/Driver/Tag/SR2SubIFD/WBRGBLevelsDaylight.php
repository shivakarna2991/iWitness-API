<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SR2SubIFD;

use PHPExiftool\Driver\AbstractTag;

class WBRGBLevelsDaylight extends AbstractTag
{

    protected $Id = 30752;

    protected $Name = 'WB_RGBLevelsDaylight';

    protected $FullName = 'Sony::SR2SubIFD';

    protected $GroupName = 'SR2SubIFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'SR2SubIFD';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'WB RGB Levels Daylight';

    protected $flag_Permanent = true;

}
