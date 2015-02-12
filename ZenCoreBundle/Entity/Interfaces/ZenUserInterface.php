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
 * Interface ZenUserInterface
 * @package ZenMail\ZenCoreBundle\Entity\Interfaces
 */
interface ZenUserInterface {

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
     * Get the username for user
     * @return string
     */
    public function getUsername();

    /**
     * Returns the name of user
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the lastname of user
     *
     * @return mixed
     */
    public function getLastName();

    /**
     * Returns the email of user
     *
     * @return mixed
     */
    public function getEmail();

}