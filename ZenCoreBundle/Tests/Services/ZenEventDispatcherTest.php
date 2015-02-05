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
use PaymentSuite\PaymentCoreBundle\PaymentCoreEvents;

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
    }

    /**
     * Testing notifyPaymentOrderLoad
     */
    public function testNotifyZenPostSendMail()
    {
      /*  $this->eventDispatcher
            ->expects($this->once())
            ->method('dispatch')
            ->with($this->equalTo('zen_mail.pre_send'), $this->isInstanceOf('PaymentSuite\PaymentCoreBundle\Event\PaymentOrderLoadEvent'));

        $paymentEventDispatcher = new PaymentEventDispatcher($this->eventDispatcher);
        $paymentEventDispatcher->notifyPaymentOrderLoad($this->paymentBridge, $this->paymentMethod);*/
    }
}
