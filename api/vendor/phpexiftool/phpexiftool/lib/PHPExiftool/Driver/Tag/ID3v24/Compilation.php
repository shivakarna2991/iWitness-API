<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ID3v24;

use PHPExiftool\Driver\AbstractTag;

class Compilation extends AbstractTag
{

    protected $Id = 'TCMP';

    protected $Name = 'Compilation';

    protected $FullName = 'ID3::v2_4';

    protected $GroupName = 'ID3v2_4';

    protected $g0 = 'ID3';

    protected $g1 = 'ID3v2_4';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Compilation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
    );

}
