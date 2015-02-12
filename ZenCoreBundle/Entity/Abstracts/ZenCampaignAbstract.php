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

namespace ZenMail\ZenCoreBundle\Entity\Abstracts;

use Doctrine\Common\Collections\Collection;
use ZenMail\ZenCoreBundle\Entity\Interfaces\ZenCampaignInterface;

/**
 * Class ZenCampaignAbstract
 * @package ZenMail\ZenCoreBundle\Entity\Abstracts
 */
abstract class ZenCampaignAbstract implements ZenCampaignInterface
{
    /**
     * @var String subject
     */
    private $subject;

    /**
     * @var Array from address => name
     */
    private $from;

    /**
     * @var Collection ZenListInterface list
     */
    private $lists;

    /**
     * Get the subject de los emial (traducir)
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set the subject of the campaign (traducir)
     *
     * @param string $subject
     *
     * @return $this self Object
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get from to emial (traducir)
     *
     * @return array
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set the name and email for from email (traducir)
     *
     * @param string $address
     * @param string $name
     *
     * @return $this self Object
     */
    public function setFrom($address, $name)
    {
        $this->from = array($address, $name);

        return $this;
    }

    /**
     * Gets the list for the campaign (traducir)
     *
     * @return Collection ZenListInterface
     */
    public function getLists()
    {
        return $this->lists;
    }

    /**
     * Sets the list for the send this campaign (traducir)
     *
     * @param Collection $lists
     * @return mixed
     */
    public function setLists(Collection $lists)
    {
        $this->lists = $lists;

        return $this;
    }
}