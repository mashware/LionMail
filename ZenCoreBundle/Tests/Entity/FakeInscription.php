<?php

/**
 * Copyright (c) 2014 Mashware
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Alberto Vioque <mashware@gmail.com>
 */

namespace ZenMail\ZenCoreBundle\Tests\Entity;

use ZenMail\ZenCoreBundle\Entity\Interfaces\ZenInscriptionInterface;
use ZenMail\ZenCoreBundle\Entity\Abstracts\ZenInscriptionAbstract;
use ZenMail\ZenCoreBundle\Entity\Interfaces\ZenListInterface;
use ZenMail\ZenCoreBundle\Entity\Interfaces\ZenUserInterface;
use ZenMail\ZenCoreBundle\Tests\Entity\FakeUser;
use ZenMail\ZenCoreBundle\Tests\Entity\FakeList;


class FakeInscription extends ZenInscriptionAbstract implements ZenInscriptionInterface
{

    private $user;

    private $list;

    public function getUser()
    {
        return $this->user;
    }


    public function setUser(ZenUserInterface $user)
    {
        $this->user = $user;

        return $this;
    }


    public function getList()
    {
        return $this->list;
    }


    public function setList(ZenListInterface $list)
    {
        $this->list = $list;
    }
}