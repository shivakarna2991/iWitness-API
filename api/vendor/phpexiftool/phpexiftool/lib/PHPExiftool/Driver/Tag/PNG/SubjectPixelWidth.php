<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\PNG;

use PHPExiftool\Driver\AbstractTag;

class SubjectPixelWidth extends AbstractTag
{

    protected $Id = 1;

    protected $Name = 'SubjectPixelWidth';

    protected $FullName = 'PNG::SubjectScale';

    protected $GroupName = 'PNG';

    protected $g0 = 'PNG';

    protected $g1 = 'PNG';

    protected $g2 = 'Image';

    protected $Type = 'var_string';

    protected $Writable = false;

    protected $Description = 'Subject Pixel Width';

}
