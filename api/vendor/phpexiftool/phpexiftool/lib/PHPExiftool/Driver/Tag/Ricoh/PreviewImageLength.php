<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Ricoh;

use PHPExiftool\Driver\AbstractTag;

class PreviewImageLength extends AbstractTag
{

    protected $Id = 30;

    protected $Name = 'PreviewImageLength';

    protected $FullName = 'Ricoh::ImageInfo';

    protected $GroupName = 'Ricoh';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Ricoh';

    protected $g2 = 'Image';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Preview Image Length';

    protected $flag_Permanent = true;

    protected $flag_Protected = true;

}
