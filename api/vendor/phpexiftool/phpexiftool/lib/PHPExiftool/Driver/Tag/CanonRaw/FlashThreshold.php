<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonRaw;

use PHPExiftool\Driver\AbstractTag;

class FlashThreshold extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'FlashThreshold';

    protected $FullName = 'CanonRaw::FlashInfo';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Image';

    protected $Type = 'float';

    protected $Writable = true;

    protected $Description = 'Flash Threshold';

    protected $flag_Permanent = true;

}
