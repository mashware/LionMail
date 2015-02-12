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

namespace ZenMail\ZenCoreBundle\Entity\Interfaces;

use Doctrine\Common\Collections\Collection;

/**
 * Interface ZenListInterface
 * @package ZenMail\ZenCoreBundle\Entity\Interfaces
 */
interface ZenListInterface {

    /**
     * Set id
     *
     * @param string $id Id
     *
     * @return $this Self object
     */
    public function setId($id);

    /**
     * Get id
     *
     * @return string Id
     */
    public function getId();

    /**
     * Set the name of the list
     *
     * @param string $name
     *
     * @return mixed
     */
    public function setName($name);

    /**
     * Get the name of the list
     *
     * @return string
     */
    public function getName();

    /**
     * Set inscriptions for this list
     *
     * @param Collection $inscriptions ZenUserInterface
     *
     * @return $this Self object
     */
    public function setInscriptions(Collection $inscriptions);

    /**
     * Get inscriptions for this list
     *
     * @param Collection
     *
     * @return Collection
     */
    public function getInscriptions();

    /**
     * Get datetime of create list
     *
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * Set datetime of delete list
     *
     * @param \DateTime $deletedAt
     *
     * @return $this Self object
     */
    public function setDeletedAt(\DateTime $deletedAt);

    /**
     * Get datetime of delete list
     *
     * @return \DateTime
     */
    public function getDeletedAt();
}