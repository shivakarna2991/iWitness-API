<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\IPTC;

use PHPExiftool\Driver\AbstractTag;

class TimeSent extends AbstractTag
{

    protected $Id = 80;

    protected $Name = 'TimeSent';

    protected $FullName = 'IPTC::EnvelopeRecord';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Time Sent';

    protected $local_g2 = 'Time';

    protected $MaxLength = 11;

}
