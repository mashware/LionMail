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

namespace LionMail\LionCoreBundle\Adapter\Interfaces;

/**
 * Interface Mailer
 *
 * @package LionMail\LionCoreBundle\Adapter\Interfaces
 */
interface Mailer
{

    /**
     * Send the menssage
     *
     * @param $message
     */
    public function sendMessage($message);

    /**
     * Create instance of Message
     *
     * @return Message
     */
    public function createMessage();
}