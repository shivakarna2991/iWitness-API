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

class ExtenderModel extends AbstractTag
{

    protected $Id = 771;

    protected $Name = 'ExtenderModel';

    protected $FullName = 'Olympus::Equipment';

    protected $GroupName = 'Olympus';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Olympus';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Extender Model';

    protected $flag_Permanent = true;

}
