<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RealRA5;

use PHPExiftool\Driver\AbstractTag;

class Channels extends AbstractTag
{

    protected $Id = 15;

    protected $Name = 'Channels';

    protected $FullName = 'Real::AudioV5';

    protected $GroupName = 'Real-RA5';

    protected $g0 = 'Real';

    protected $g1 = 'Real-RA5';

    protected $g2 = 'Audio';

    protected $Type = 'int16u';

    protected $Writable = false;

    protected $Description = 'Channels';

}
