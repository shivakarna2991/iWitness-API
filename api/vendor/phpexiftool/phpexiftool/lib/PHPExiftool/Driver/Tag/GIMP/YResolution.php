<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\GIMP;

use PHPExiftool\Driver\AbstractTag;

class YResolution extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'YResolution';

    protected $FullName = 'GIMP::Resolution';

    protected $GroupName = 'GIMP';

    protected $g0 = 'GIMP';

    protected $g1 = 'GIMP';

    protected $g2 = 'Image';

    protected $Type = 'float';

    protected $Writable = false;

    protected $Description = 'Y Resolution';

}
