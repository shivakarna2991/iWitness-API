<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SPIFF;

use PHPExiftool\Driver\AbstractTag;

class ColorComponents extends AbstractTag
{

    protected $Id = 3;

    protected $Name = 'ColorComponents';

    protected $FullName = 'JPEG::SPIFF';

    protected $GroupName = 'SPIFF';

    protected $g0 = 'APP8';

    protected $g1 = 'SPIFF';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Color Components';

}
