<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPMicrosoft;

use PHPExiftool\Driver\AbstractTag;

class DateAcquired extends AbstractTag
{

    protected $Id = 'DateAcquired';

    protected $Name = 'DateAcquired';

    protected $FullName = 'Microsoft::XMP';

    protected $GroupName = 'XMP-microsoft';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-microsoft';

    protected $g2 = 'Image';

    protected $Type = 'date';

    protected $Writable = true;

    protected $Description = 'Date Acquired';

    protected $local_g2 = 'Time';

}
