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
use ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessageInterface;
use ZenMail\ZenCoreBundle\Event\ZenPreSendMailEvent;
use ZenMail\ZenCoreBundle\Event\ZenPostSendMailEvent;
use ZenMail\ZenCoreBundle\ZenCoreEvents;

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


    public function notifyZenPreSendMail(ZenMessageInterface $zenMessage)
    {
        $preSendMailEvent = new ZenPreSendMailEvent($zenMessage);
        $this->eventDispatcher->dispatch(ZenCoreEvents::ZEN_PRE_SEND_MAIL, $preSendMailEvent);

        return $this;
    }

    public function notifyZenPostSendMail(ZenMessageInterface $zenMessage)
    {
        $postSendMailEvent = new ZenPostSendMailEvent($zenMessage);
        $this->eventDispatcher->dispatch(ZenCoreEvents::ZEN_POST_SEND_MAIL, $postSendMailEvent);

        return $this;
    }
}
