<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPCrs;

use PHPExiftool\Driver\AbstractTag;

class ToneCurvePV2012Green extends AbstractTag
{

    protected $Id = 'ToneCurvePV2012Green';

    protected $Name = 'ToneCurvePV2012Green';

    protected $FullName = 'XMP::crs';

    protected $GroupName = 'XMP-crs';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-crs';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Tone Curve PV2012 Green';

    protected $flag_List = true;

    protected $flag_Seq = true;

}
