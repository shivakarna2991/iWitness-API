<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\ASF;

use PHPExiftool\Driver\AbstractTag;

class BannerImage extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'BannerImage';

    protected $FullName = 'ASF::ContentBranding';

    protected $GroupName = 'ASF';

    protected $g0 = 'ASF';

    protected $g1 = 'ASF';

    protected $g2 = 'Author';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Banner Image';

    protected $flag_Binary = true;

}