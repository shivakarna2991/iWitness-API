<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\GraphConv;

use PHPExiftool\Driver\AbstractTag;

class Quality extends AbstractTag
{

    protected $Id = 'Q';

    protected $Name = 'Quality';

    protected $FullName = 'JPEG::GraphConv';

    protected $GroupName = 'GraphConv';

    protected $g0 = 'APP15';

    protected $g1 = 'GraphConv';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Quality';

}
