<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\FujiFilm;

use PHPExiftool\Driver\AbstractTag;

class HighISONoiseReduction extends AbstractTag
{

    protected $Id = 4110;

    protected $Name = 'HighISONoiseReduction';

    protected $FullName = 'FujiFilm::Main';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'High ISO Noise Reduction';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Normal',
        ),
        256 => array(
            'Id' => 256,
            'Label' => 'Strong',
        ),
        512 => array(
            'Id' => 512,
            'Label' => 'Weak',
        ),
    );

}
