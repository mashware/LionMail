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
 * Interface ZenCampaignInterface
 * @package ZenMail\ZenCoreBundle\Entity\Interfaces
 */
interface ZenCampaignInterface {

    /**
     * Get the subject de los emial (traducir)
     *
     * @return string
     */
    public function getSubject();

    /**
     * Set the subject of the campaign (traducir)
     *
     * @param string $subject
     *
     * @return $this self Object
     */
    public function setSubject($subject);

    /**
     * Get from to emial (traducir)
     *
     * @return array
     */
    public function getFrom();

    /**
     * Set the name and email for from email (traducir)
     *
     * @param string $address
     * @param string $name
     *
     * @return $this self Object
     */
    public function setFrom($address, $name);

    /**
     * Gets the list for the campaign (traducir)
     *
     * @return Collection ZenListInterface
     */
    public function getLists();

    /**
     * Sets the list for the send this campaign (traducir)
     *
     * @param Collection $lists
     * @return mixed
     */
    public function setLists(Collection $lists);
}