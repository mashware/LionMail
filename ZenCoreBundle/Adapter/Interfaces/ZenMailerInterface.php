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
 * Interface ZenMailerInterface
 * @package ZenMail\ZenCoreBundle\Adapter\Interfaces
 */
interface ZenMailerInterface
{
    /**
     * Send the menssage
     *
     * @param ZenMessageInterface $message
     * @return int
     */
    public function sendMessage(ZenMessageInterface $message);

    /**
     * Create instance of ZenMessageInterface
     *
     * @return ZenMessageInterface
     */
    public function createMessage();
}