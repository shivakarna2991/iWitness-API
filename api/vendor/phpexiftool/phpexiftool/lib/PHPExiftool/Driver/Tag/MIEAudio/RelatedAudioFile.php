<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\MIEAudio;

use PHPExiftool\Driver\AbstractTag;

class RelatedAudioFile extends AbstractTag
{

    protected $Id = 'data';

    protected $Name = 'RelatedAudioFile';

    protected $FullName = 'MIE::Audio';

    protected $GroupName = 'MIE-Audio';

    protected $g0 = 'MIE';

    protected $g1 = 'MIE-Audio';

    protected $g2 = 'Audio';

    protected $Type = 'undef';

    protected $Writable = true;

    protected $Description = 'Related Audio File';

    protected $flag_Binary = true;

}
