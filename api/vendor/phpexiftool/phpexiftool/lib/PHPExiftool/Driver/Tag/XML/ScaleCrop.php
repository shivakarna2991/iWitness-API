<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XML;

use PHPExiftool\Driver\AbstractTag;

class ScaleCrop extends AbstractTag
{

    protected $Id = 'ScaleCrop';

    protected $Name = 'ScaleCrop';

    protected $FullName = 'OOXML::Main';

    protected $GroupName = 'XML';

    protected $g0 = 'XML';

    protected $g1 = 'XML';

    protected $g2 = 'Document';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Scale Crop';

    protected $Values = array(
        false => array(
            'Id' => false,
            'Label' => 'No',
        ),
        true => array(
            'Id' => true,
            'Label' => 'Yes',
        ),
    );

}
