<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Radiance;

use PHPExiftool\Driver\AbstractTag;

class ColorPrimaries extends AbstractTag
{

    protected $Id = 'primaries';

    protected $Name = 'ColorPrimaries';

    protected $FullName = 'Radiance::Main';

    protected $GroupName = 'Radiance';

    protected $g0 = 'Radiance';

    protected $g1 = 'Radiance';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Color Primaries';

}
