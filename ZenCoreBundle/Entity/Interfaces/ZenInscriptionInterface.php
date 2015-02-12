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

/**
 * Interface ZenInscriptionInterface
 * @package ZenMail\ZenCoreBundle\Entity\Interfaces
 */
interface ZenInscriptionInterface {

    /**
     * Returns the entity of user this inscription
     *
     * @return ZenUserInterface
     */
    public function getUser();

    /**
     * Sets the user of this inscription
     *
     * @param ZenUserInterface $user
     *
     * @return $this self Object
     */
    public function setUser(ZenUserInterface $user);

    /**
     * Get the list for this inscription
     *
     * @return ZenListInterface
     */
    public function getList();

    /**
     * Set the list for this inscription
     *
     * @param ZenListInterface $list
     *
     * @return $this self Object
     */
    public function setList(ZenListInterface $list);

    /**
     * Returns date of subscribed in list
     *
     * @return \DateTime
     */
    public function getSubscribedAt();

    /**
     * Sets date of subscribed
     *
     * @param \DateTime $suscribedAt
     *
     * @return $this self Object
     */
    public function setSubscribedAt(\DateTime $suscribedAt);

    /**
     * Gets date of unsubscribe
     *
     * @return \DateTime
     */
    public function getUnsubscribeAt();

    /**
     * Sets date of unsubscribe
     *
     * @param \DateTime $unsuscribedAt
     *
     * @return $this self Object
     */
    public function setUnsubscribeAt(\DateTime $unsuscribedAt);
}