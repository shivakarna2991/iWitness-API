<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPXmpBJ;

use PHPExiftool\Driver\AbstractTag;

class JobRefId extends AbstractTag
{

    protected $Id = 'JobRefId';

    protected $Name = 'JobRefId';

    protected $FullName = 'XMP::xmpBJ';

    protected $GroupName = 'XMP-xmpBJ';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmpBJ';

    protected $g2 = 'Other';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Job Ref Id';

    protected $flag_List = true;

}
