<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPMediapro;

use PHPExiftool\Driver\AbstractTag;

class Location extends AbstractTag
{

    protected $Id = 'Location';

    protected $Name = 'Location';

    protected $FullName = 'XMP::MediaPro';

    protected $GroupName = 'XMP-mediapro';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-mediapro';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Location';

    protected $local_g2 = 'Location';

    protected $flag_Avoid = true;

}
