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

class OffsetOrigin extends AbstractTag
{

    protected $Id = 15;

    protected $Name = 'OffsetOrigin';

    protected $FullName = 'MNG::PasteImage';

    protected $GroupName = 'MNG';

    protected $g0 = 'MNG';

    protected $g1 = 'MNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Offset Origin';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Desination Origin',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Target Origin',
        ),
    );

}
