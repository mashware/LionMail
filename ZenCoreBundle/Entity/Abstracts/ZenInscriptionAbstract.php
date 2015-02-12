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

use ZenMail\ZenCoreBundle\Entity\Interfaces\ZenInscriptionInterface;

/**
 * Class ZenInscriptionAbstract
 *
 * @package ZenMail\ZenCoreBundle\Entity\Abstracts
 */
abstract class ZenInscriptionAbstract implements ZenInscriptionInterface
{

    /**
     * @var \DateTime subscribedAt
     */
    private $subscribedAt;

    /**
     * @var \DateTime unsubscribeAt
     */
    private $unsubscribeAt;

    function __construct()
    {
        $this->subscribedAt = new \DateTime('now');
    }

    /**
     * Returns date of subscribed at in list
     *
     * @return \DateTime
     */
    public function getSubscribedAt()
    {
        return $this->subscribedAt;
    }

    /**
     * Sets date of subscribed
     *
     * @param \DateTime $suscribedAt
     * @return $this self Object
     */
    public function setSubscribedAt(\DateTime $suscribedAt)
    {
        $this->subscribedAt = $suscribedAt;

        return $this;
    }

    /**
     * Gets date of unsubscribe
     *
     * @return \DateTime
     */
    public function getUnsubscribeAt()
    {
        return $this->unsubscribeAt;
    }

    /**
     * Sets date of unsubscribe at
     *
     * @param \DateTime $unsuscribedAt
     * @return $this self Object
     */
    public function setUnsubscribeAt(\DateTime $unsuscribedAt)
    {
        $this->unsubscribeAt = $unsuscribedAt;

        return $this;
    }

}