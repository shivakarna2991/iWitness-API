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

class ExposureAdj extends AbstractTag
{

    protected $Id = 0;

    protected $Name = 'ExposureAdj';

    protected $FullName = 'NikonCapture::Exposure';

    protected $GroupName = 'NikonCapture';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCapture';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Exposure Adj';

    protected $flag_Permanent = true;

}