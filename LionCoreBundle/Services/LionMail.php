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

use LionMail\LionCoreBundle\Adapter\Interfaces\Mailer;
use LionMail\LionCoreBundle\Adapter\Interfaces\Message;

/**
 * Class LionMail
 *
 * @package LionMail\LionCoreBundle\Services
 */
class LionMail implements Mailer
{

    /**
     * Adaptador elegido por el usuario (traducir)
     *
     * @var Mailer
     */
    private $mailerAdapter;

    /**
     * @param Mailer $mailerAdapter
     */
    function __construct(Mailer $mailerAdapter)
    {
        $this->mailerAdapter = $mailerAdapter;
    }

    /**
     * Send the menssage
     *
     * @param Message $message
     */
    public function sendMessage($message)
    {
        $this->mailerAdapter->sendMessage($message);
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