<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\DV;

use PHPExiftool\Driver\AbstractTag;

class AudioChannels extends AbstractTag
{

    protected $Id = 'AudioChannels';

    protected $Name = 'AudioChannels';

    protected $FullName = 'DV::Main';

    protected $GroupName = 'DV';

    protected $g0 = 'DV';

    protected $g1 = 'DV';

    protected $g2 = 'Video';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Audio Channels';

    protected $local_g2 = 'Audio';

}
