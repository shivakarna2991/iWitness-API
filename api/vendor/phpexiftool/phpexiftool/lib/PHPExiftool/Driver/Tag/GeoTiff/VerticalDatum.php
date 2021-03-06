<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\GeoTiff;

use PHPExiftool\Driver\AbstractTag;

class VerticalDatum extends AbstractTag
{

    protected $Id = 4098;

    protected $Name = 'VerticalDatum';

    protected $FullName = 'GeoTiff::Main';

    protected $GroupName = 'GeoTiff';

    protected $g0 = 'GeoTiff';

    protected $g1 = 'GeoTiff';

    protected $g2 = 'Location';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Vertical Datum';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Vertical Datum Base',
        ),
        32767 => array(
            'Id' => 32767,
            'Label' => 'User Defined',
        ),
    );

}
