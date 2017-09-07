<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCapture;

use PHPExiftool\Driver\AbstractTag;

class BrightnessAdj extends AbstractTag
{

    protected $Id = 'mixed';

    protected $Name = 'BrightnessAdj';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'mixed';

    protected $Writable = true;

    protected $Description = 'Brightness Adj';

    protected $flag_Permanent = true;

}
