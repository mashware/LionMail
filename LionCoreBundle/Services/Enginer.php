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

use LionMail\LionCoreBundle\Adapter\Interfaces\EnginerMailer;
use LionMail\LionCoreBundle\Adapter\Interfaces\Message;

/**
 * Class Enginer
 *
 * @package LionMail\LionCoreBundle\Services
 */
class Enginer implements EnginerMailer
{

    /**
     * Adaptador elegido por el usuario (traducir)
     *
     * @var EnginerMailer
     */
    private $enginerMailerAdapter;

    /**
     * @param EnginerMailer $enginerMailerAdapter
     */
    function __construct(EnginerMailer $enginerMailerAdapter)
    {
        $this->enginerMailerAdapter = $enginerMailerAdapter;
    }

    /**
     * Send the menssage
     *
     * @param Message $message
     */
    public function sendMessage($message)
    {
        $this->enginerMailerAdapter->sendMessage($message);
    }

    /**
     * Create instance of Message
     *
     * @return Message
     */
    public function createMessage()
    {
        return $this->enginerMailerAdapter->createMessage();
    }


}