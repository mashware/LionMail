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

namespace ZenMail\ZenSwiftAdapterBundle\Tests\Adapter;

use ZenMail\ZenSwiftAdapterBundle\Adapter\ZenSwiftMailerAdapter;

/**
 * Class ZenSwiftMailerAdapterTest
 * @package ZenMail\ZenSwiftAdapterBundle\Tests\Adapter
 */
class ZenSwiftMailerAdapterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ZenSwiftMailerAdapter
     */
    private $zenSwiftMailerAdapter;

    /**
     * @var \Swift_Mailer
     */
    private $swiftMailer;

    public function setUp()
    {
        $transport = $this->getMockBuilder('\Swift_Transport')
            ->disableOriginalConstructor()
            ->getMock();
        $this->swiftMailer = $this->getMockBuilder('\Swift_Mailer')
            ->setConstructorArgs(array($transport))
            ->setMethods(array('send'))
            ->getMock();

        $this->zenSwiftMailerAdapter = new ZenSwiftMailerAdapter($this->swiftMailer);
    }

    public function testCreateMessageReturnInstanceOfSwiftMessage()
    {
        $messageCreated = $this->zenSwiftMailerAdapter->createMessage();

        $this->assertInstanceOf('ZenMail\ZenSwiftAdapterBundle\Adapter\ZenSwiftMessageAdapter', $messageCreated);
    }

    public function testSendMessage(){
        $messageCreated = $this->zenSwiftMailerAdapter->createMessage();
        $this->swiftMailer
            ->expects($this->once())
            ->method('send')
            ->with($this->equalTo($messageCreated->getInstanceMessage()))
            ->will($this->returnValue(1));

        $sendNum = $this->zenSwiftMailerAdapter->sendMessage($messageCreated);

        $this->assertEquals(1, $sendNum);
    }
}