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

class Rotation extends AbstractTag
{

    protected $Id = 3;

    protected $Name = 'Rotation';

    protected $FullName = 'CanonRaw::ImageInfo';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Image';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Rotation';

    protected $flag_Permanent = true;

}
