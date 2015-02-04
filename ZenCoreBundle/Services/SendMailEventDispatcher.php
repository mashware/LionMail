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

namespace ZenMail\ZenCoreBundle\Services;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use ZenMail\ZenCoreBundle\Event\ZenMailPreSendEvent;
use ZenMail\ZenCoreBundle\Event\ZenMailPostSendEvent;

/**
 * Notification event dispatcher.
 */
class SendMailEventDispatcher
{

    /**
     * @var EventDispatcherInterface
     *
     * Event dispatcher
     */
    private $eventDispatcher;

    /**
     * Construct method
     *
     * @param EventDispatcherInterface $eventDispatcher Event dispatcher
     */
    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }


    public function notifyPreSendMail()
    {
        $preSendEvent = new ZenMailPreSendEvent();
        $this->eventDispatcher->dispatch('zen_mail.pre_send', $preSendEvent);

        return $this;
    }

    public function notifyPostSendMail()
    {
        $postSendEvent = new ZenMailPostSendEvent();
        $this->eventDispatcher->dispatch('zen_mail.post_send', $postSendEvent);

        return $this;
    }
}
