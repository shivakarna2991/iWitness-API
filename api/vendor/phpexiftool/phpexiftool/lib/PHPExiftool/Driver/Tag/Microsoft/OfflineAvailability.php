<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Microsoft;

use PHPExiftool\Driver\AbstractTag;

class OfflineAvailability extends AbstractTag
{

    protected $Id = '{A94688B6-7D9F-4570-A648-E3DFC0AB2B3F} 100';

    protected $Name = 'OfflineAvailability';

    protected $FullName = 'Microsoft::Xtra';

    protected $GroupName = 'Microsoft';

    protected $g0 = 'QuickTime';

    protected $g1 = 'Microsoft';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Offline Availability';

}
