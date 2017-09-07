<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPPhotoshop;

use PHPExiftool\Driver\AbstractTag;

class DocumentAncestors extends AbstractTag
{

    protected $Id = 'DocumentAncestors';

    protected $Name = 'DocumentAncestors';

    protected $FullName = 'XMP::photoshop';

    protected $GroupName = 'XMP-photoshop';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-photoshop';

    protected $g2 = 'Image';

    protected $Type = 'struct';

    protected $Writable = true;

    protected $Description = 'Document Ancestors';

    protected $flag_List = true;

}
