<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\PICT;

use PHPExiftool\Driver\AbstractTag;

class EraseRgn extends AbstractTag
{

    protected $Id = 130;

    protected $Name = 'EraseRgn';

    protected $FullName = 'PICT::Main';

    protected $GroupName = 'PICT';

    protected $g0 = 'PICT';

    protected $g1 = 'PICT';

    protected $g2 = 'Other';

    protected $Type = 'Rgn';

    protected $Writable = false;

    protected $Description = 'Erase Rgn';

}