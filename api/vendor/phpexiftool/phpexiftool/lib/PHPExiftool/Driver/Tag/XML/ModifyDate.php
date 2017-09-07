<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XML;

use PHPExiftool\Driver\AbstractTag;

class ModifyDate extends AbstractTag
{

    protected $Id = 'modified';

    protected $Name = 'ModifyDate';

    protected $FullName = 'OOXML::Main';

    protected $GroupName = 'XML';

    protected $g0 = 'XML';

    protected $g1 = 'XML';

    protected $g2 = 'Document';

    protected $Type = 'date';

    protected $Writable = false;

    protected $Description = 'Modify Date';

    protected $local_g2 = 'Time';

}