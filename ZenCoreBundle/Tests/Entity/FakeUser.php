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

use ZenMail\ZenCoreBundle\Entity\Interfaces\ZenUserInterface;

class FakeUser implements ZenUserInterface
{
    private $id;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return 'Mash';
    }


    public function getName()
    {
        return "Alberto";
    }


    public function getLastName()
    {
        return "Vioque Muñoz";
    }


    public function getEmail()
    {
        return "mashware@gmail.com";
    }
}