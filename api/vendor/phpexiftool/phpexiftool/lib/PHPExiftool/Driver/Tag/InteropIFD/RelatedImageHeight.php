<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\InteropIFD;

use PHPExiftool\Driver\AbstractTag;

class RelatedImageHeight extends AbstractTag
{

    protected $Id = 4098;

    protected $Name = 'RelatedImageHeight';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'InteropIFD';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Related Image Height';

    protected $local_g1 = 'InteropIFD';

    protected $flag_Unsafe = true;

}
