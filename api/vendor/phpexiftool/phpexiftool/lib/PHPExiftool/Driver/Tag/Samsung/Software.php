<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Samsung;

use PHPExiftool\Driver\AbstractTag;

class Software extends AbstractTag
{

    protected $Id = 125;

    protected $Name = 'Software';

    protected $FullName = 'Samsung::MP4';

    protected $GroupName = 'Samsung';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Samsung';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Software';

    protected $flag_Permanent = true;

    protected $MaxLength = 32;

}