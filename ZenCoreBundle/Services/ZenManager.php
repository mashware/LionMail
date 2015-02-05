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

use ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMailer;
use ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessage;
use ZenMail\ZenCoreBundle\Services\ZenEventDispatcher;


/**
 * Class ZenManager
 * @package ZenMail\ZenCoreBundle\Services
 */
class ZenManager implements ZenMailer
{

    /**
     * Adaptador elegido por el usuario (traducir)
     *
     * @var ZenMailer
     */
    private $zenMailer;

    /**
     * @var ZenEventDispatcher
     *
     * Notification event dispatcher
     */
    protected $zenEventDispatcher;

    /**
     * @param ZenMailer $zenMailer
     * @param ZenEventDispatcher $zenEventDispatcher
     */
    function __construct(ZenMailer $zenMailer, ZenEventDispatcher $zenEventDispatcher)
    {
        $this->zenMailer = $zenMailer;
        $this->zenEventDispatcher = $zenEventDispatcher;
    }

    /**
     * Send the menssage
     *
     * @param ZenMessage $message
     */
    public function sendMessage(ZenMessage $message)
    {
        $this
            ->zenEventDispatcher
            ->notifyZenPreSendMail();

        echo "- Envío";
        //$this->zenMailer->sendZenMessage($message);

        $this
            ->zenEventDispatcher
            ->notifyZenPostSendMail();
    }

    /**
     * Create instance of ZenMessage
     *
     * @return ZenMessage
     */
    public function createMessage()
    {
        return $this->zenMailer->createMessage();
    }
}