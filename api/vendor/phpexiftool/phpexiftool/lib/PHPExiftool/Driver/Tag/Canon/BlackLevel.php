<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Canon;

use PHPExiftool\Driver\AbstractTag;

class BlackLevel extends AbstractTag
{

    protected $Id = 16392;

    protected $Name = 'BlackLevel';

    protected $FullName = 'Canon::Main';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Black Level';

    protected $flag_Permanent = true;

}
