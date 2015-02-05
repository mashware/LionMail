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

use ZenMail\ZenSwiftAdapterBundle\Adapter\ZenSwiftMessageAdapter;

/**
 * Class ZenSwiftMessageAdapterTest
 * @package ZenMail\ZenSwiftAdapterBundle\Tests\Adapter
 */
class ZenSwiftMessageAdapterTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ZenSwiftMessageAdapter
     */
    private static $zenSwiftMessageAdapter;


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
        self::$zenSwiftMessageAdapter = new ZenSwiftMessageAdapter($swiftMessage);

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

        self::$zenSwiftMessageAdapter->setFrom($email);
        self::$zenSwiftMessageAdapter->setTo($email);
        self::$zenSwiftMessageAdapter->setCc($email);
        self::$zenSwiftMessageAdapter->setBcc($email);
        self::$zenSwiftMessageAdapter->setSender($email);
        self::$zenSwiftMessageAdapter->setReplyTo($email);

        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getFrom(), 'Test SetOnlyOne From');
        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getTo(), 'Test SetOnlyOne To');
        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getCc(), 'Test SetOnlyOne Cc');
        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getBcc(), 'Test SetOnlyOne Bcc');
        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getSender(), 'Test SetOnlyOne Sender');
        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getReplyTo(), 'Test SetOnlyOne ReplyTo');
    }

    public function testSetOnlyOneFromWithName()
    {
        $email = 'mashware@gmail.com';
        $name  = "Alberto";
        $emailReturn = array(
            $email => $name
        );

        self::$zenSwiftMessageAdapter->setFrom($email, $name);
        self::$zenSwiftMessageAdapter->setTo($email, $name);
        self::$zenSwiftMessageAdapter->setCc($email, $name);
        self::$zenSwiftMessageAdapter->setBcc($email, $name);
        self::$zenSwiftMessageAdapter->setSender($email, $name);
        self::$zenSwiftMessageAdapter->setReplyTo($email, $name);

        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getFrom(), 'Test SetOnlyOneFromWithName From');
        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getTo(), 'Test SetOnlyOneFromWithName To');
        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getCc(), 'Test SetOnlyOneFromWithName Cc');
        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getBcc(), 'Test SetOnlyOneFromWithName Bcc');
        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getSender(), 'Test SetOnlyOneFromWithName Sender');
        $this->assertSame($emailReturn, self::$zenSwiftMessageAdapter->getReplyTo(), 'Test SetOnlyOneFromWithName ReplyTo');
    }

    public function testSetMultipleFrom()
    {
        self::$zenSwiftMessageAdapter->setFrom(self::$emails);
        self::$zenSwiftMessageAdapter->setFrom(self::$emails);
        self::$zenSwiftMessageAdapter->setTo(self::$emails);
        self::$zenSwiftMessageAdapter->setCc(self::$emails);
        self::$zenSwiftMessageAdapter->setBcc(self::$emails);
        self::$zenSwiftMessageAdapter->setSender(self::$emails);
        self::$zenSwiftMessageAdapter->setReplyTo(self::$emails);

        $this->assertSame(self::$emailsReturn, self::$zenSwiftMessageAdapter->getFrom(), 'Test SetMultipleFrom From');
        $this->assertSame(self::$emailsReturn, self::$zenSwiftMessageAdapter->getTo(), 'Test SetMultipleFrom To');
        $this->assertSame(self::$emailsReturn, self::$zenSwiftMessageAdapter->getCc(), 'Test SetMultipleFrom Cc');
        $this->assertSame(self::$emailsReturn, self::$zenSwiftMessageAdapter->getBcc(), 'Test SetMultipleFrom Bcc');
        $this->assertSame(self::$emailsReturn, self::$zenSwiftMessageAdapter->getSender(), 'Test SetMultipleFrom Sender');
        $this->assertSame(self::$emailsReturn, self::$zenSwiftMessageAdapter->getReplyTo(), 'Test SetMultipleFrom ReplyTo');
    }

    public function testSetSubject(){
        $subject = 'My subject';

        self::$zenSwiftMessageAdapter->setSubject($subject);

        $this->assertSame($subject, self::$zenSwiftMessageAdapter->getSubject());

    }

    public function testSetOnlyBody(){
        $body = 'My body';

        self::$zenSwiftMessageAdapter->setBody($body);

        $this->assertSame($body, self::$zenSwiftMessageAdapter->getBody());
    }

    public function testSetBodyAndContentType(){
        $body = 'My body';
        $contentType = 'text/html';

        self::$zenSwiftMessageAdapter->setBody($body, $contentType);

        $this->assertSame($body, self::$zenSwiftMessageAdapter->getBody());
        $this->assertSame($contentType, self::$zenSwiftMessageAdapter->getContentType());
    }

    public function testSetBodyAndContentTypeAndCharset(){
        $body = 'My body';
        $contentType = 'text/html';
        $charset = 'iso-8859-2';

        self::$zenSwiftMessageAdapter->setBody($body, $contentType, $charset);

        $this->assertSame($body, self::$zenSwiftMessageAdapter->getBody());
    }

    public function testSetDate(){
        $date = new \DateTime('now');

        self::$zenSwiftMessageAdapter->setDate($date);

        $this->assertSame($date->getTimestamp(), self::$zenSwiftMessageAdapter->getDate()->getTimestamp());
    }

    public function testSetContentType(){
        $contentType = 'text/plain';

        self::$zenSwiftMessageAdapter->setContentType($contentType);

        $this->assertSame($contentType, self::$zenSwiftMessageAdapter->getContentType());
    }

    public function testToString(){
        $this->assertNotNull(self::$zenSwiftMessageAdapter->__toString());
    }
}