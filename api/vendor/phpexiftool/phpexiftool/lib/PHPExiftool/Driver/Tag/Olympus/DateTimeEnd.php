<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Olympus;

use PHPExiftool\Driver\AbstractTag;

class DateTimeEnd extends AbstractTag
{

    protected $Id = 50;

    protected $Name = 'DateTimeEnd';

    protected $FullName = 'Olympus::WAV';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Audio';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Date Time End';

    protected $local_g2 = 'Time';

    protected $flag_Permanent = true;

    protected $MaxLength = 12;

}
