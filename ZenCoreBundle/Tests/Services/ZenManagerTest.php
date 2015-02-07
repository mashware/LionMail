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
     * @var ZenMailerInterface
     */
    private $zenMailerInterface;

    /**
     * @var ZenMessageInterface
     */
    private $zenMessageInterface;

    /**
     * @var ZenEventDispatcher
     */
    private $sendMailEventDispatcher;

    public function setUp()
    {
        $this->zenMessageInterface = $this->getMock('ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessageInterface');
        $this->zenMailerInterface = $this->getMock('ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMailerInterface');
        $this->sendMailEventDispatcher = $this->getMockBuilder('ZenMail\ZenCoreBundle\Services\ZenEventDispatcher')
            ->disableOriginalConstructor()
            ->getMock();

        $this->zenManager = new ZenManager($this->zenMailerInterface, $this->sendMailEventDispatcher);
    }

    public function testCreateZenMessageReturnInstanceOfZenMessageInterface()
    {
        $this->zenMailerInterface->expects($this->once())
            ->method('createMessage')
            ->will($this->returnValue($this->zenMessageInterface));

        $messageCreated = $this->zenManager->createMessage();

        $this->assertInstanceOf('ZenMail\ZenCoreBundle\Adapter\Interfaces\ZenMessageInterface', $messageCreated);
    }
}