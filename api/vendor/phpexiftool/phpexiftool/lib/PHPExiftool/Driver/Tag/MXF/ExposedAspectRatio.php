<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MXF;

use PHPExiftool\Driver\AbstractTag;

class ExposedAspectRatio extends AbstractTag
{

    protected $Id = '060e2b34.0101.0102.04100103.02030000';

    protected $Name = 'ExposedAspectRatio';

    protected $FullName = 'MXF::Main';

    protected $GroupName = 'MXF';

    protected $g0 = 'MXF';

    protected $g1 = 'MXF';

    protected $g2 = 'Video';

    protected $Type = 'rational64s';

    protected $Writable = false;

    protected $Description = 'Exposed Aspect Ratio';

}
