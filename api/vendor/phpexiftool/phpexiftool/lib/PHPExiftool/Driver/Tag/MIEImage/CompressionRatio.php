<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIEImage;

use PHPExiftool\Driver\AbstractTag;

class CompressionRatio extends AbstractTag
{

    protected $Id = 'Compression';

    protected $Name = 'CompressionRatio';

    protected $FullName = 'MIE::Image';

    protected $GroupName = 'MIE-Image';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Image';

    protected $g2 = 'Image';

    protected $Type = 'rational32u';

    protected $Writable = true;

    protected $Description = 'Compression Ratio';

}
