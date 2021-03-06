<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\EXE;

use PHPExiftool\Driver\AbstractTag;

class LinkerVersion extends AbstractTag
{

    protected $Id = 11;

    protected $Name = 'LinkerVersion';

    protected $FullName = 'EXE::Main';

    protected $GroupName = 'EXE';

    protected $g0 = 'EXE';

    protected $g1 = 'EXE';

    protected $g2 = 'Other';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Linker Version';

    protected $MaxLength = 2;

}
