<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIEGPS;

use PHPExiftool\Driver\AbstractTag;

class GPSTrack extends AbstractTag
{

    protected $Id = 'Heading';

    protected $Name = 'GPSTrack';

    protected $FullName = 'MIE::GPS';

    protected $GroupName = 'MIE-GPS';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-GPS';

    protected $g2 = 'Location';

    protected $Type = 'rational64s';

    protected $Writable = true;

    protected $Description = 'GPS Track';

}