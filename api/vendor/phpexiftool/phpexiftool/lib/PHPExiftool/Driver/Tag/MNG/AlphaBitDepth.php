<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MNG;

use PHPExiftool\Driver\AbstractTag;

class AlphaBitDepth extends AbstractTag
{

    protected $Id = 12;

    protected $Name = 'AlphaBitDepth';

    protected $FullName = 'MNG::JNGHeader';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Alpha Bit Depth';

}