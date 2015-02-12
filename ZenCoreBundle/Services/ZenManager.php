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

use ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMailerInterface;
use ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessageInterface;
use ZenMail\ZenCoreBundle\Services\ZenEventDispatcher;


/**
 * Class ZenManager
 * @package ZenMail\ZenCoreBundle\Services
 */
class ZenManager implements ZenMailerInterface
{

    /**
     * Adaptador elegido por el usuario (traducir)
     *
     * @var ZenMailerInterface
     */
    private $zenMailer;

    /**
     * @var ZenEventDispatcher
     *
     * Notification event dispatcher
     */
    protected $zenEventDispatcher;

    /**
     * @param ZenMailerInterface $zenMailer
     * @param ZenEventDispatcher $zenEventDispatcher
     */
    function __construct(ZenMailerInterface $zenMailer, ZenEventDispatcher $zenEventDispatcher)
    {
        $this->zenMailer = $zenMailer;
        $this->zenEventDispatcher = $zenEventDispatcher;
    }

    /**
     * Send the menssage
     *
     * @param ZenMessageInterface $message
     * @return int
     */
    public function sendMessage(ZenMessageInterface $message)
    {
        $this
            ->zenEventDispatcher
            ->notifyZenPreSendMail($message);

        $result = $this->zenMailer->sendMessage($message);

        $this
            ->zenEventDispatcher
            ->notifyZenPostSendMail($message);

        return $result;
    }

    /**
     * Create instance of ZenMessageInterface
     *
     * @return ZenMessageInterface
     */
    public function createMessage()
    {
        return $this->zenMailer->createMessage();
    }
}