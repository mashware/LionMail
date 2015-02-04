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
use ZenMail\ZenCoreBundle\Event\ZenMailPreSendEvent;
    /**
 * Class ZenMailPreSendEvent
 * @package ZenMail\ZenCoreBundle\Event
 */
class ZenMailPreSendEventTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ZenMailPreSendEvent
     *
     * Object to test
     */
    private $event;

    public function setUp(){
        $this->event = new ZenMailPreSendEvent();
    }

    /**
     * Testing if event instances Event Framework class
     */
    public function testInstanceOf()
    {
        $this->assertInstanceOf('Symfony\Component\EventDispatcher\Event', $this->event);
    }

}
