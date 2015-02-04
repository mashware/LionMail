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

use ZenMail\ZenCoreBundle\Services\ZenMail;

/**
 * Class Enginer
 *
 * @package ZenMail\ZenCoreBundle\Tests\Services
 */
class ZenMailTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ZenMail
     */
    private $zenMail;

    /**
     * @var Mailer
     */
    private $mailer;

    /**
     * @var Message
     */
    private $message;

    public function setUp()
    {
        $this->message = $this->getMock('ZenMail\ZenCoreBundle\Adapter\Interfaces\Message');
        $this->mailer = $this->getMock('ZenMail\ZenCoreBundle\Adapter\Interfaces\Mailer');

        $this->zenMail = new ZenMail($this->mailer);
    }

    public function testCreateMessageReturnInstanceOfZenMessage()
    {
        $this->mailer->expects($this->once())
            ->method('createMessage')
            ->will($this->returnValue($this->message));

        $messageCreated = $this->zenMail->createMessage();

        $this->assertInstanceOf('ZenMail\ZenCoreBundle\Adapter\Interfaces\Message', $messageCreated);
    }
}