<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MetaIFD;

use PHPExiftool\Driver\AbstractTag;

class SerialNumber extends AbstractTag
{

    protected $Id = 50004;

    protected $Name = 'SerialNumber';

    protected $FullName = 'Kodak::Meta';

    protected $GroupName = 'MetaIFD';

    protected $g0 = 'Meta';

    protected $g1 = 'MetaIFD';

    protected $g2 = 'Image';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Serial Number';

    protected $local_g2 = 'Camera';

}
