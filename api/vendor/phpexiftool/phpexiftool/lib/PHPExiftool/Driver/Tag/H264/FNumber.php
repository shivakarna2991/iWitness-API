<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\H264;

use PHPExiftool\Driver\AbstractTag;

class FNumber extends AbstractTag
{

    protected $Id = 161;

    protected $Name = 'FNumber';

    protected $FullName = 'H264::MDPM';

    protected $GroupName = 'H264';

    protected $g0 = 'H264';

    protected $g1 = 'H264';

    protected $g2 = 'Camera';

    protected $Type = 'rational32u';

    protected $Writable = false;

    protected $Description = 'F Number';

    protected $local_g2 = 'Image';

}
