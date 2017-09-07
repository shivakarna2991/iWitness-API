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

class ImageHeight extends AbstractTag
{

    protected $Id = 'ImageHeight';

    protected $Name = 'ImageHeight';

    protected $FullName = 'H264::Main';

    protected $GroupName = 'H264';

    protected $g0 = 'H264';

    protected $g1 = 'H264';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Image Height';

}
