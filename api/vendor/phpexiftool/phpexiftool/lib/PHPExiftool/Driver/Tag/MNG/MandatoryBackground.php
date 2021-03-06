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

class MandatoryBackground extends AbstractTag
{

    protected $Id = 6;

    protected $Name = 'MandatoryBackground';

    protected $FullName = 'MNG::Background';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Mandatory Background';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Color and Image Advisory',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Color Mandatory, Image Advisory',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Color Advisory, Image Mandatory',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Color and Image Mandatory',
        ),
    );

}
