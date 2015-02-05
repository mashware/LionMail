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
use ZenMail\ZenCoreBundle\Event\ZenPreSendMailEvent;
use ZenMail\ZenCoreBundle\Event\ZenPostSendMailEvent;

/**
 * Notification event dispatcher.
 */
class ZenEventDispatcher
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


    public function notifyZenPreSendMail()
    {
        $preSendMailEvent = new ZenPreSendMailEvent();
        $this->eventDispatcher->dispatch('zen.pre_send_mail', $preSendMailEvent);

        return $this;
    }

    public function notifyZenPostSendMail()
    {
        $postSendMailEvent = new ZenPostSendMailEvent();
        $this->eventDispatcher->dispatch('zen.post_send_mail', $postSendMailEvent);

        return $this;
    }
}