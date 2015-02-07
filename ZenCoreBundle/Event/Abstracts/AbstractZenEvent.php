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

namespace ZenMail\ZenCoreBundle\Event\Abstracts;

use ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessageInterface;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class AbstractZenEvent
 * @package ZenMail\ZenCoreBundle\Event\Abstracts
 */
abstract class AbstractZenEvent extends Event
{

    /**
     * @var ZenMessageInterface
     */
    private $zenMessage;

    /**
     * @param ZenMessageInterface $zenMessage
     */
    public function __construct(ZenMessageInterface $zenMessage)
    {
        $this->zenMessage = $zenMessage;
    }

    /**
     * Get Order Wrapper
     *
     * @return ZenMessageInterface Message to send
     */
    public function getZenMessage()
    {
        return $this->zenMessage;
    }
}
