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

use Doctrine\Common\Collections\Collection;
use ZenMail\ZenCoreBundle\Entity\Interfaces\ZenListInterface;

class FakeList implements ZenListInterface
{
    private  $id;

    private $name;

    private $inscriptions;

    private $createdAt;

    private $deletedAt;

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this->name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setInscriptions(Collection $inscriptions)
    {
        $this->inscriptions = $inscriptions;
    }

    public function getInscriptions()
    {
        return $this->inscriptions;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setDeletedAt(\DateTime $deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }

    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

}