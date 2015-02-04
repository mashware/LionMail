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

namespace ZenMail\ZenSwiftAdapterBundle\Adapter;

use ZenMail\ZenCoreBundle\Adapter\Interfaces\Mailer;
use ZenMail\ZenCoreBundle\Adapter\Interfaces\Message;
use ZenMail\ZenSwiftAdapterBundle\Adapter\SwiftMessageAdapter;

/**
 * Class SwiftMailerAdapter
 * @package ZenMail\ZenSwiftAdapterBundle\Adapter
 */
class SwiftMailerAdapter implements Mailer
{

    /**
     * swiftMailer
     *
     * @var \Swift_Mailer
     */
    private $swiftMailer;

    /**
     * @param \Swift_Mailer $swiftMailer
     */
    function __construct(\Swift_Mailer $swiftMailer)
    {
        $this->swiftMailer = $swiftMailer;
    }

    /**
     * Send the menssage
     *
     * @param Message $message
     */
    public function sendMessage(Message $message)
    {
        $this->swiftMailer->send($message);
    }

    /**
     * Create instance of SwiftMessage
     *
     * @return SwiftMessageAdapter
     */
    public function createMessage()
    {
        $message = new SwiftMessageAdapter(\Swift_Message::newInstance());

        return $message;
    }
}