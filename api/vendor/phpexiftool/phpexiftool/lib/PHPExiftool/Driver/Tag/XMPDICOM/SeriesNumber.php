<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPDICOM;

use PHPExiftool\Driver\AbstractTag;

class SeriesNumber extends AbstractTag
{

    protected $Id = 'SeriesNumber';

    protected $Name = 'SeriesNumber';

    protected $FullName = 'XMP::DICOM';

    protected $GroupName = 'XMP-DICOM';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-DICOM';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Series Number';

}
