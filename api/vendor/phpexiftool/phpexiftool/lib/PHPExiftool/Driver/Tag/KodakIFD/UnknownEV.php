<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\KodakIFD;

use PHPExiftool\Driver\AbstractTag;

class UnknownEV extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'UnknownEV';

    protected $FullName = 'Kodak::IFD';

    protected $GroupName = 'KodakIFD';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'KodakIFD';

    protected $g2 = 'Image';

    protected $Type = 'rational64u';

    protected $Writable = true;

    protected $Description = 'Unknown EV';

    protected $flag_Permanent = true;

}