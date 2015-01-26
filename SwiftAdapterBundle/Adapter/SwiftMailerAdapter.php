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

namespace LionMail\SwiftAdapterBundle\Adapter\SwiftMailer;

use LionMail\LionCoreBundle\Adapter\Interfaces\EnginerMailer;
use LionMail\SwiftAdapterBundle\Adapter\SwiftMailer\SwiftMessageAdapter;

/**
 * Class SwiftMailerAdapter
 * @package LionMail\SwiftAdapterBundle\Adapter\SwiftMailer
 */
class SwiftMailerAdapter implements EnginerMailer {

    /**
     * swiftMailer
     *
     * @var \Swift_Mailer
     */
    private $swiftMailer;

    /**
     * @param \Swift_Mailer $swiftMailer
     */
    function __construct(\Swift_Mailer $swiftMailer) {
        $this->swiftMailer = $swiftMailer;
    }

    /**
     * Send the menssage
     *
     * @param $message
     */
    public function sendMessage($message) {
        $this->swiftMailer->send($message);
    }

    /**
     * Create instance of SwiftMessage
     *
     * @return SwiftMessageAdapter
     */
    public function createMessage() {
        $message = new SwiftMessageAdapter(\Swift_Message::newInstance());

        return $message;
    }
}