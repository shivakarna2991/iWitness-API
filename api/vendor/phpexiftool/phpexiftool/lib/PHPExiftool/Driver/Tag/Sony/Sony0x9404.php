<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Sony;

use PHPExiftool\Driver\AbstractTag;

class Sony0x9404 extends AbstractTag
{

    protected $Id = 37892;

    protected $Name = 'Sony_0x9404';

    protected $FullName = 'Sony::Main';

    protected $GroupName = 'Sony';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Sony';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Sony 0x9404';

    protected $flag_Permanent = true;

}
