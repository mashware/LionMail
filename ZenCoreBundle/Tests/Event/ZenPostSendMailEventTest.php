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

namespace  ZenMail\ZenCoreBundle\Tests\Event;

use Symfony\Component\EventDispatcher\Event;
use ZenMail\ZenCoreBundle\Event\ZenPostSendMailEvent;

/**
 * Class ZenPostSendMailEventTest
 * @package ZenMail\ZenCoreBundle\Tests\Event
 */
class ZenPostSendMailEventTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ZenPostSendMailEvent
     *
     * Object to test
     */
    private $event;

    /**
     * @var ZenMessageInterface
     *
     * Message interface
     */
    private $message;

    public function setUp(){
        $this->message = $this->getMock('ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessageInterface');

        $this->event = new ZenPostSendMailEvent($this->message);
    }

    /**
     * Testing if event instances Event Framework class
     */
    public function testInstanceOf()
    {
        $this->assertInstanceOf('Symfony\Component\EventDispatcher\Event', $this->event);
    }

    /**
     * Testing getMessage
     */
    public function testGetZenMessage()
    {
        $this->assertEquals($this->message, $this->event->getZenMessage());
    }

}
