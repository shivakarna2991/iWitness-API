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

class ReferenceDate extends AbstractTag
{

    protected $Id = 47;

    protected $Name = 'ReferenceDate';

    protected $FullName = 'IPTC::ApplicationRecord';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'digits';

    protected $Writable = true;

    protected $Description = 'Reference Date';

    protected $local_g2 = 'Time';

    protected $flag_List = true;

    protected $MaxLength = 8;

}
