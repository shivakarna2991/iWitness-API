<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

use PHPExiftool\Driver\AbstractTag;

class WBShiftAB extends AbstractTag
{

    protected $Id = 16;

    protected $Name = 'WBShiftAB';

    protected $FullName = 'Pentax::ColorInfo';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Image';

    protected $Type = 'int8s';

    protected $Writable = true;

    protected $Description = 'WB Shift AB';

    protected $flag_Permanent = true;

}
