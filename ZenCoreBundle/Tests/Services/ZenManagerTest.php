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

use ZenMail\ZenCoreBundle\Services\ZenManager;

/**
 * Class ZenManagerTest
 * @package ZenMail\ZenCoreBundle\Tests\Services
 */
class ZenManagerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ZenManager
     */
    private $zenManager;

    /**
     * @var ZenMailer
     */
    private $zenMailer;

    /**
     * @var ZenMessage
     */
    private $zenMessage;

    /**
     * @var ZenEventDispatcher
     */
    private $sendMailEventDispatcher;

    public function setUp()
    {
        $this->zenMessage = $this->getMock('ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessage');
        $this->zenMailer = $this->getMock('ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMailer');
        $this->sendMailEventDispatcher = $this->getMockBuilder('ZenMail\ZenCoreBundle\Services\ZenEventDispatcher')
            ->disableOriginalConstructor()
            ->getMock();

        $this->zenManager = new ZenManager($this->zenMailer, $this->sendMailEventDispatcher );
    }

    public function testCreateZenMessageReturnInstanceOfZenMessage()
    {
        $this->zenMailer->expects($this->once())
            ->method('createMessage')
            ->will($this->returnValue($this->zenMessage));

        $messageCreated = $this->zenManager->createMessage();

        $this->assertInstanceOf('ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessage', $messageCreated);
    }
}