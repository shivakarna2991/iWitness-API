<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\QuickTime;

use PHPExiftool\Driver\AbstractTag;

class OtherFormat extends AbstractTag
{

    protected $Id = 2;

    protected $Name = 'OtherFormat';

    protected $FullName = 'QuickTime::OtherSampleDesc';

    protected $GroupName = 'QuickTime';

    protected $g0 = 'QuickTime';

    protected $g1 = 'QuickTime';

    protected $g2 = 'Other';

    protected $Type = 'undef';

    protected $Writable = false;

    protected $Description = 'Other Format';

    protected $MaxLength = 4;

}