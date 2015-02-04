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

use ZenMail\ZenSwiftAdapterBundle\Adapter\SwiftMessageAdapter;

class SwiftMessageAdapterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var SwiftMessageAdapter
     */
    private static $swiftMessageAdapter;


    /**
     * @var Array
     */
    private static $emails;

    /**
     * @var Array
     */
    private static $emailsReturn;

    public static function setUpBeforeClass()
    {
        $swiftMessage = new \Swift_Message();
        self::$swiftMessageAdapter = new SwiftMessageAdapter($swiftMessage);

        self::$emails = array(
            'dummy@dummy.com'  => 'Dummy',
            'dummy2@dummy.com',
            'dummy3@dummy.com',
            'dummy4@dummy.com' => 'Dummy 4'
        );

        self::$emailsReturn = array(
            'dummy@dummy.com'  => "Dummy",
            'dummy2@dummy.com' => NULL,
            'dummy3@dummy.com' => NULL,
            'dummy4@dummy.com' => "Dummy 4"
        );
    }

    public function testSetOnlyOne()
    {
        $email = 'mashware@gmail.com';
        $emailReturn = array(
            $email => null
        );

        self::$swiftMessageAdapter->setFrom($email);
        self::$swiftMessageAdapter->setTo($email);
        self::$swiftMessageAdapter->setCc($email);
        self::$swiftMessageAdapter->setBcc($email);
        self::$swiftMessageAdapter->setSender($email);
        self::$swiftMessageAdapter->setReplyTo($email);

        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getFrom(), 'Test SetOnlyOne From');
        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getTo(), 'Test SetOnlyOne To');
        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getCc(), 'Test SetOnlyOne Cc');
        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getBcc(), 'Test SetOnlyOne Bcc');
        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getSender(), 'Test SetOnlyOne Sender');
        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getReplyTo(), 'Test SetOnlyOne ReplyTo');
    }

    public function testSetOnlyOneFromWithName()
    {
        $email = 'mashware@gmail.com';
        $name  = "Alberto";
        $emailReturn = array(
            $email => $name
        );

        self::$swiftMessageAdapter->setFrom($email, $name);
        self::$swiftMessageAdapter->setTo($email, $name);
        self::$swiftMessageAdapter->setCc($email, $name);
        self::$swiftMessageAdapter->setBcc($email, $name);
        self::$swiftMessageAdapter->setSender($email, $name);
        self::$swiftMessageAdapter->setReplyTo($email, $name);

        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getFrom(), 'Test SetOnlyOneFromWithName From');
        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getTo(), 'Test SetOnlyOneFromWithName To');
        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getCc(), 'Test SetOnlyOneFromWithName Cc');
        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getBcc(), 'Test SetOnlyOneFromWithName Bcc');
        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getSender(), 'Test SetOnlyOneFromWithName Sender');
        $this->assertSame($emailReturn, self::$swiftMessageAdapter->getReplyTo(), 'Test SetOnlyOneFromWithName ReplyTo');
    }

    public function testSetMultipleFrom()
    {
        self::$swiftMessageAdapter->setFrom(self::$emails);
        self::$swiftMessageAdapter->setFrom(self::$emails);
        self::$swiftMessageAdapter->setTo(self::$emails);
        self::$swiftMessageAdapter->setCc(self::$emails);
        self::$swiftMessageAdapter->setBcc(self::$emails);
        self::$swiftMessageAdapter->setSender(self::$emails);
        self::$swiftMessageAdapter->setReplyTo(self::$emails);

        $this->assertSame(self::$emailsReturn, self::$swiftMessageAdapter->getFrom(), 'Test SetMultipleFrom From');
        $this->assertSame(self::$emailsReturn, self::$swiftMessageAdapter->getTo(), 'Test SetMultipleFrom To');
        $this->assertSame(self::$emailsReturn, self::$swiftMessageAdapter->getCc(), 'Test SetMultipleFrom Cc');
        $this->assertSame(self::$emailsReturn, self::$swiftMessageAdapter->getBcc(), 'Test SetMultipleFrom Bcc');
        $this->assertSame(self::$emailsReturn, self::$swiftMessageAdapter->getSender(), 'Test SetMultipleFrom Sender');
        $this->assertSame(self::$emailsReturn, self::$swiftMessageAdapter->getReplyTo(), 'Test SetMultipleFrom ReplyTo');
    }

    public function testSetSubject(){
        $subject = 'My subject';

        self::$swiftMessageAdapter->setSubject($subject);

        $this->assertSame($subject, self::$swiftMessageAdapter->getSubject());

    }

    public function testSetOnlyBody(){
        $body = 'My body';

        self::$swiftMessageAdapter->setBody($body);

        $this->assertSame($body, self::$swiftMessageAdapter->getBody());
    }

    public function testSetBodyAndContentType(){
        $body = 'My body';
        $contentType = 'text/html';

        self::$swiftMessageAdapter->setBody($body, $contentType);

        $this->assertSame($body, self::$swiftMessageAdapter->getBody());
        $this->assertSame($contentType, self::$swiftMessageAdapter->getContentType());
    }

    public function testSetBodyAndContentTypeAndCharset(){
        $body = 'My body';
        $contentType = 'text/html';
        $charset = 'iso-8859-2';

        self::$swiftMessageAdapter->setBody($body, $contentType, $charset);

        $this->assertSame($body, self::$swiftMessageAdapter->getBody());
    }

    public function testSetDate(){
        $date = new \DateTime('now');

        self::$swiftMessageAdapter->setDate($date);

        $this->assertSame($date->getTimestamp(), self::$swiftMessageAdapter->getDate()->getTimestamp());
    }

    public function testSetContentType(){
        $contentType = 'text/plain';

        self::$swiftMessageAdapter->setContentType($contentType);

        $this->assertSame($contentType, self::$swiftMessageAdapter->getContentType());
    }

    public function testToString(){
        $this->assertNotNull(self::$swiftMessageAdapter->__toString());
    }
}