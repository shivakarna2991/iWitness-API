<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

use PHPExiftool\Driver\AbstractTag;

class NikonAVITags0x000e extends AbstractTag
{

    protected $Id = 14;

    protected $Name = 'Nikon_AVITags_0x000e';

    protected $FullName = 'Nikon::AVITags';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Nikon AVI Tags 0x000e';

    protected $flag_Permanent = true;

}
