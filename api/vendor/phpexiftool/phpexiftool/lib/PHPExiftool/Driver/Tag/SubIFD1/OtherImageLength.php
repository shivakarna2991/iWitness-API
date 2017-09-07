<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SubIFD1;

use PHPExiftool\Driver\AbstractTag;

class OtherImageLength extends AbstractTag
{

    protected $Id = 514;

    protected $Name = 'OtherImageLength';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'SubIFD1';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Other Image Length';

    protected $local_g1 = 'SubIFD1';

    protected $flag_Permanent = true;

    protected $flag_Protected = true;

    protected $Index = 7;

}
