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

class FNumber extends AbstractTag
{

    protected $Id = 88;

    protected $Name = 'FNumber';

    protected $FullName = 'KyoceraRaw::Main';

    protected $GroupName = 'KyoceraRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'KyoceraRaw';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = false;

    protected $Description = 'F Number';

    protected $local_g2 = 'Image';

    protected $flag_Permanent = true;

}
