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

use ZenMail\ZenCoreBundle\Adapter\Interfaces\Mailer;
use ZenMail\ZenCoreBundle\Adapter\Interfaces\Message;
use ZenMail\ZenCoreBundle\Services\SendMailEventDispatcher;


/**
 * Class ZenMail
 *
 * @package ZenMail\ZenCoreBundle\Services
 */
class ZenMail implements Mailer
{

    /**
     * Adaptador elegido por el usuario (traducir)
     *
     * @var Mailer
     */
    private $mailerAdapter;

    /**
     * @var SendMailEventDispatcher
     *
     * Notification event dispatcher
     */
    protected $sendMailEventDispatcher;

    /**
     * @param Mailer $mailerAdapter
     * @param SendMailEventDispatcher $sendMailEventDispatcher
     */
    function __construct(Mailer $mailerAdapter, SendMailEventDispatcher $sendMailEventDispatcher)
    {
        $this->mailerAdapter = $mailerAdapter;
        $this->sendMailEventDispatcher = $sendMailEventDispatcher;
    }

    /**
     * Send the menssage
     *
     * @param Message $message
     */
    public function sendMessage(Message $message)
    {
        $this
            ->sendMailEventDispatcher
            ->notifyPreSendMail();

        echo "- Envío";
        //$this->mailerAdapter->sendMessage($message);

        $this
            ->sendMailEventDispatcher
            ->notifyPostSendMail();
    }

    /**
     * Create instance of Message
     *
     * @return Message
     */
    public function createMessage()
    {
        return $this->mailerAdapter->createMessage();
    }
}