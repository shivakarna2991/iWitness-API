<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPGPano;

use PHPExiftool\Driver\AbstractTag;

class StitchingSoftware extends AbstractTag
{

    protected $Id = 'StitchingSoftware';

    protected $Name = 'StitchingSoftware';

    protected $FullName = 'XMP::GPano';

    protected $GroupName = 'XMP-GPano';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-GPano';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Stitching Software';

}
