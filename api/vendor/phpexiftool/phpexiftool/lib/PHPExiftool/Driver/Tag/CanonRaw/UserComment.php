<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\CanonRaw;

use PHPExiftool\Driver\AbstractTag;

class UserComment extends AbstractTag
{

    protected $Id = 2053;

    protected $Name = 'UserComment';

    protected $FullName = 'CanonRaw::Main';

    protected $GroupName = 'CanonRaw';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonRaw';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'User Comment';

    protected $flag_Permanent = true;

    protected $MaxLength = 256;

    protected $Index = 1;

}
