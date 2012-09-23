<?php

/**
 * This file is part of Gitonomy.
 *
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 * (c) Julien DIDIER <genzo.wm@gmail.com>
 *
 * This source file is subject to the GPL license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Gitonomy\Bundle\CoreBundle\Entity\ThreadMessage;

use Gitonomy\Bundle\CoreBundle\Entity\ThreadMessage;

class MergeMessage extends ThreadMessage
{
    public function getSentence()
    {
        return 'merged';
    }

    public function getName()
    {
        return 'merge';
    }
}
