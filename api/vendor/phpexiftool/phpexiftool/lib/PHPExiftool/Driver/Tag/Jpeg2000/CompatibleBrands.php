<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Jpeg2000;

use PHPExiftool\Driver\AbstractTag;

class CompatibleBrands extends AbstractTag
{

    protected $Id = 2;

    protected $Name = 'CompatibleBrands';

    protected $FullName = 'Jpeg2000::FileType';

    protected $GroupName = 'Jpeg2000';

    protected $g0 = 'Jpeg2000';

    protected $g1 = 'Jpeg2000';

    protected $g2 = 'Video';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Compatible Brands';

}
