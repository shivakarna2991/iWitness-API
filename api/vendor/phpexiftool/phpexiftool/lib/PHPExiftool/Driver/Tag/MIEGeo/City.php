<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIEGeo;

use PHPExiftool\Driver\AbstractTag;

class City extends AbstractTag
{

    protected $Id = 'City';

    protected $Name = 'City';

    protected $FullName = 'MIE::Geo';

    protected $GroupName = 'MIE-Geo';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Geo';

    protected $g2 = 'Location';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'City';

}