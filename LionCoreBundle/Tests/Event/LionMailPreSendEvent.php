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

namespace  LionMail\LionCoreBundle\Tests\Event;

use Symfony\Component\EventDispatcher\Event;
use LionMail\LionCoreBundle\Event\LionMailPreSendEvent;
    /**
 * Class LionMailPreSendEvent
 * @package LionMail\LionCoreBundle\Event
 */
class LionMailPreSendEventTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var LionMailPreSendEvent
     *
     * Object to test
     */
    private $event;

    public function setUp(){
        $this->event = new LionMailPreSendEvent();
    }

    /**
     * Testing if event instances Event Framework class
     */
    public function testInstanceOf()
    {
        $this->assertInstanceOf('Symfony\Component\EventDispatcher\Event', $this->event);
    }

}
