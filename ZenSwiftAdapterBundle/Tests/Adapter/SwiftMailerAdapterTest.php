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

use ZenMail\ZenSwiftAdapterBundle\Adapter\SwiftMailerAdapter;

class SwiftMailerAdapterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var SwiftMailerAdapter
     */
    private $swiftMailerEnginer;

    /**
     * @var \Swift_Mailer
     */
    private $swiftMailer;

    public function setUp()
    {
        $this->swiftMailer = $this->getMockBuilder('\Swift_Mailer')
            ->disableOriginalConstructor()
            ->getMock();

        $this->swiftMailerEnginer = new SwiftMailerAdapter($this->swiftMailer);

    }

    public function testCreateMessageReturnInstanceOfSwiftMessage()
    {
        $messageCreated = $this->swiftMailerEnginer->createMessage();

        $this->assertInstanceOf('ZenMail\ZenSwiftAdapterBundle\Adapter\SwiftMessageAdapter', $messageCreated);
    }

    /*
        public function testCreatedAtIsDateTime() {
            $date = new \DateTime();

            $notification = new Notification();
            $notification->setCreatedAt($date);

            // $this->assertEquals($date, $notification->getCreatedAt());
            $this->assertInstanceOf('DateTime', $notification->getCreatedAt(), 'CreateAt es un objeto \DateTime');
          $prueba = $this->getMockBuilder('Escuela\BackendBundle\Entity\Prueba')->getMock();
            $prueba->expects($this->atLeastOnce())
                ->method('getInicioInscripcion')
                ->will($this->returnValue(new \DateTime('now - 10 days')));
            $prueba->expects($this->any())
                ->method('getFinInscripcion')
                ->will($this->returnValue(new \DateTime('now + 2 days')));
            $this->testClass->setPrueba($prueba);

            $this->assertSame(true, $this->testClass->estaPlazoAbierto(), "Si esta el plazo abierto");

        }
        public function testCreatedAtNotIsDateTime() {
           /* $notification = new Notification();
            $notification->setCreatedAt('989');

           // $this->assertEquals($date, $notification->getCreatedAt());
            $this->assertNotInstanceOf('\DateTime', $notification->getCreatedAt(), 'CreateAt no es devuelve un objeto \DateTime');

        }*/
}