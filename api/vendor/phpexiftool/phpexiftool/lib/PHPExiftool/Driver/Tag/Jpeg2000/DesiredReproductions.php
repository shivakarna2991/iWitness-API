<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Jpeg2000;

use PHPExiftool\Driver\AbstractTag;

class DesiredReproductions extends AbstractTag
{

    protected $Id = 'drep';

    protected $Name = 'DesiredReproductions';

    protected $FullName = 'Jpeg2000::Main';

    protected $GroupName = 'Jpeg2000';

    protected $g0 = 'Jpeg2000';

    protected $g1 = 'Jpeg2000';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Desired Reproductions';

}
