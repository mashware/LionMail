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

namespace ZenMail\ZenCoreBundle\Adapter\Interfaces;

/**
 * Interface ZenMailer
 *
 * @package ZenMail\ZenCoreBundle\Adapter\Interfaces
 */
interface ZenMailer
{

    /**
     * Send the menssage
     *
     * @param ZenMessage $message
     */
    public function sendMessage(ZenMessage $message);

    /**
     * Create instance of ZenMessage
     *
     * @return ZenMessage
     */
    public function createMessage();
}