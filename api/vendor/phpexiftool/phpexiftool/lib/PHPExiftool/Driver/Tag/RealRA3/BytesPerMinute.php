<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RealRA3;

use PHPExiftool\Driver\AbstractTag;

class BytesPerMinute extends AbstractTag
{

    protected $Id = 2;

    protected $Name = 'BytesPerMinute';

    protected $FullName = 'Real::AudioV3';

    protected $GroupName = 'Real-RA3';

    protected $g0 = 'Real';

    protected $g1 = 'Real-RA3';

    protected $g2 = 'Audio';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Bytes Per Minute';

}
