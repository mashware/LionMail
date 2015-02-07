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

namespace ZenMail\ZenCoreBundle\Tests\Services;

use PaymentSuite\PaymentCoreBundle\Services\PaymentEventDispatcher;
use ZenMail\ZenCoreBundle\Services\ZenEventDispatcher;
use ZenMail\ZenCoreBundle\ZenCoreEvents;


/**
 * Class ZenEventDispatcherTest
 * @package ZenMail\ZenCoreBundle\Tests\Services
 */
class ZenEventDispatcherTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var EventDispatcher
     *
     * Event dispatcher
     */
    private $eventDispatcher;

    /**
     * @var ZenMessageInterface
     *
     * ZenMessage Interface
     */
    private $message;
    /**
     * Setup
     */
    public function setUp()
    {
        $this->eventDispatcher = $this
            ->getMockBuilder('Symfony\Component\EventDispatcher\EventDispatcher')
            ->setMethods(array(
                'dispatch'
            ))
            ->disableOriginalConstructor()
            ->getMock();

        $this->message = $this->getMock('ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessageInterface');
    }

    public function testNotifyZenPreSendMail()
    {
        $this->eventDispatcher
            ->expects($this->once())
            ->method('dispatch')
            ->with($this->equalTo(ZenCoreEvents::ZEN_PRE_SEND_MAIL), $this->isInstanceOf('ZenMail\ZenCoreBundle\Event\ZenPreSendMailEvent'));

        $zenEventDispatcher = new ZenEventDispatcher($this->eventDispatcher);
        $zenEventDispatcher->notifyZenPreSendMail($this->message);
    }


    public function testNotifyZenPostSendMail()
    {
        $this->eventDispatcher
            ->expects($this->once())
            ->method('dispatch')
            ->with($this->equalTo(ZenCoreEvents::ZEN_POST_SEND_MAIL), $this->isInstanceOf('ZenMail\ZenCoreBundle\Event\ZenPostSendMailEvent'));

        $zenEventDispatcher = new ZenEventDispatcher($this->eventDispatcher);
        $zenEventDispatcher->notifyZenPostSendMail($this->message);
    }
}
