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

use ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMailerInterface;
use ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessageInterface;
use ZenMail\ZenSwiftAdapterBundle\Adapter\ZenSwiftMessageAdapter;

/**
 * Class ZenSwiftMailerAdapter
 * @package ZenMail\ZenSwiftAdapterBundle\Adapter
 */
class ZenSwiftMailerAdapter implements ZenMailerInterface
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
     * @param ZenMessageInterface $message
     */
    public function sendMessage(ZenMessageInterface $message)
    {
        $this->swiftMailer->send($message);
    }

    /**
     * Create instance of SwiftMessage
     *
     * @return ZenSwiftMessageAdapter
     */
    public function createMessage()
    {
        $message = new ZenSwiftMessageAdapter(\Swift_Message::newInstance());

        return $message;
    }
}