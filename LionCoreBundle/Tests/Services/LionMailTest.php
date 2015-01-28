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

namespace LionMail\LionCoreBundle\Tests\Services;

use LionMail\LionCoreBundle\Services\LionMail;

/**
 * Class Enginer
 *
 * @package LionMail\LionCoreBundle\Tests\Services
 */
class LionMailTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var LionMail
     */
    private $lionMail;

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
        $this->message = $this->getMock('LionMail\LionCoreBundle\Adapter\Interfaces\Message');
        $this->mailer = $this->getMock('LionMail\LionCoreBundle\Adapter\Interfaces\Mailer');

        $this->lionMail = new LionMail($this->mailer);
    }

    public function testCreateMessageReturnInstanceOfLionMessage()
    {
        $this->mailer->expects($this->once())
            ->method('createMessage')
            ->will($this->returnValue($this->message));

        $messageCreated = $this->lionMail->createMessage();

        $this->assertInstanceOf('LionMail\LionCoreBundle\Adapter\Interfaces\Message', $messageCreated);
    }
}