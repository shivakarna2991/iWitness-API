<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\RMETA;

use PHPExiftool\Driver\AbstractTag;

class Lit extends AbstractTag
{

    protected $Id = 'Lit';

    protected $Name = 'Lit';

    protected $FullName = 'Ricoh::RMETA';

    protected $GroupName = 'RMETA';

    protected $g0 = 'APP5';

    protected $g1 = 'RMETA';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Lit';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'No',
        ),
    );

}
