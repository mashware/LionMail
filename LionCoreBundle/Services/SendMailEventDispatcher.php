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

namespace LionMail\LionCoreBundle\Services;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use LionMail\LionCoreBundle\Event\LionMailPreSendEvent;
use LionMail\LionCoreBundle\Event\LionMailPostSendEvent;

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
        $preSendEvent = new LionMailPreSendEvent();
        $this->eventDispatcher->dispatch('lion_mail.pre_send', $preSendEvent);

        return $this;
    }

    public function notifyPostSendMail()
    {
        $postSendEvent = new LionMailPostSendEvent();
        $this->eventDispatcher->dispatch('lion_mail.post_send', $postSendEvent);

        return $this;
    }
}
