<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\KyoceraRaw;

use PHPExiftool\Driver\AbstractTag;

class FirmwareVersion extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'FirmwareVersion';

    protected $FullName = 'KyoceraRaw::Main';

    protected $GroupName = 'KyoceraRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'KyoceraRaw';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Firmware Version';

    protected $flag_Permanent = true;

    protected $MaxLength = 10;

}
