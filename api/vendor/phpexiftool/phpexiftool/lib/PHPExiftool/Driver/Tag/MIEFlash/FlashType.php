<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIEFlash;

use PHPExiftool\Driver\AbstractTag;

class FlashType extends AbstractTag
{

    protected $Id = 'Type';

    protected $Name = 'FlashType';

    protected $FullName = 'MIE::Flash';

    protected $GroupName = 'MIE-Flash';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Flash';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Flash Type';

}
