<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

use PHPExiftool\Driver\AbstractTag;

class Location extends AbstractTag
{

    protected $Id = 9;

    protected $Name = 'Location';

    protected $FullName = 'Nikon::LocationInfo';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Location';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Location';

    protected $flag_Permanent = true;

    protected $MaxLength = 70;

}
