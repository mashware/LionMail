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
    private $zenSwiftMessageAdapter;


    /**
     * @var Array
     */
    private $emails;

    /**
     * @var Array
     */
    private $emailsReturn;

    public  function setUp()
    {
        $swiftMessage = new \Swift_Message();
        $this->zenSwiftMessageAdapter = new ZenSwiftMessageAdapter($swiftMessage);

        $this->emails = array(
            'dummy@dummy.com' => 'Dummy',
            'dummy2@dummy.com',
            'dummy3@dummy.com',
            'dummy4@dummy.com' => 'Dummy 4'
        );

        $this->emailsReturn = array(
            'dummy@dummy.com' => "Dummy",
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

        $this->zenSwiftMessageAdapter->setFrom($email);
        $this->zenSwiftMessageAdapter->setTo($email);
        $this->zenSwiftMessageAdapter->setCc($email);
        $this->zenSwiftMessageAdapter->setBcc($email);
        $this->zenSwiftMessageAdapter->setSender($email);
        $this->zenSwiftMessageAdapter->setReplyTo($email);

        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getFrom(), 'Test SetOnlyOne From');
        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getTo(), 'Test SetOnlyOne To');
        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getCc(), 'Test SetOnlyOne Cc');
        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getBcc(), 'Test SetOnlyOne Bcc');
        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getSender(), 'Test SetOnlyOne Sender');
        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getReplyTo(), 'Test SetOnlyOne ReplyTo');
    }

    public function testSetOnlyOneFromWithName()
    {
        $email = 'mashware@gmail.com';
        $name = "Alberto";
        $emailReturn = array(
            $email => $name
        );

        $this->zenSwiftMessageAdapter->setFrom($email, $name);
        $this->zenSwiftMessageAdapter->setTo($email, $name);
        $this->zenSwiftMessageAdapter->setCc($email, $name);
        $this->zenSwiftMessageAdapter->setBcc($email, $name);
        $this->zenSwiftMessageAdapter->setSender($email, $name);
        $this->zenSwiftMessageAdapter->setReplyTo($email, $name);

        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getFrom(), 'Test SetOnlyOneFromWithName From');
        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getTo(), 'Test SetOnlyOneFromWithName To');
        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getCc(), 'Test SetOnlyOneFromWithName Cc');
        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getBcc(), 'Test SetOnlyOneFromWithName Bcc');
        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getSender(), 'Test SetOnlyOneFromWithName Sender');
        $this->assertSame($emailReturn, $this->zenSwiftMessageAdapter->getReplyTo(), 'Test SetOnlyOneFromWithName ReplyTo');
    }

    public function testSetMultipleFrom()
    {
        $this->zenSwiftMessageAdapter->setFrom($this->emails);
        $this->zenSwiftMessageAdapter->setFrom($this->emails);
        $this->zenSwiftMessageAdapter->setTo($this->emails);
        $this->zenSwiftMessageAdapter->setCc($this->emails);
        $this->zenSwiftMessageAdapter->setBcc($this->emails);
        $this->zenSwiftMessageAdapter->setSender($this->emails);
        $this->zenSwiftMessageAdapter->setReplyTo($this->emails);

        $this->assertSame($this->emailsReturn, $this->zenSwiftMessageAdapter->getFrom(), 'Test SetMultipleFrom From');
        $this->assertSame($this->emailsReturn, $this->zenSwiftMessageAdapter->getTo(), 'Test SetMultipleFrom To');
        $this->assertSame($this->emailsReturn, $this->zenSwiftMessageAdapter->getCc(), 'Test SetMultipleFrom Cc');
        $this->assertSame($this->emailsReturn, $this->zenSwiftMessageAdapter->getBcc(), 'Test SetMultipleFrom Bcc');
        $this->assertSame($this->emailsReturn, $this->zenSwiftMessageAdapter->getSender(), 'Test SetMultipleFrom Sender');
        $this->assertSame($this->emailsReturn, $this->zenSwiftMessageAdapter->getReplyTo(), 'Test SetMultipleFrom ReplyTo');
    }

    public function testSetSubject()
    {
        $subject = 'My subject';

        $this->zenSwiftMessageAdapter->setSubject($subject);

        $this->assertSame($subject, $this->zenSwiftMessageAdapter->getSubject());

    }

    public function testSetOnlyBody()
    {
        $body = 'My body';

        $this->zenSwiftMessageAdapter->setBody($body);

        $this->assertSame($body, $this->zenSwiftMessageAdapter->getBody());
    }

    public function testSetBodyAndContentType()
    {
        $body = 'My body';
        $contentType = 'text/html';

        $this->zenSwiftMessageAdapter->setBody($body, $contentType);

        $this->assertSame($body, $this->zenSwiftMessageAdapter->getBody());
        $this->assertSame($contentType, $this->zenSwiftMessageAdapter->getContentType());
    }

    public function testSetBodyAndContentTypeAndCharset()
    {
        $body = 'My body';
        $contentType = 'text/html';
        $charset = 'iso-8859-2';

        $this->zenSwiftMessageAdapter->setBody($body, $contentType, $charset);

        $this->assertSame($body, $this->zenSwiftMessageAdapter->getBody());
    }

    public function testSetDate()
    {
        $date = new \DateTime('now');

        $this->zenSwiftMessageAdapter->setDate($date);

        $this->assertSame($date->getTimestamp(), $this->zenSwiftMessageAdapter->getDate()->getTimestamp());
    }

    public function testSetContentType()
    {
        $contentType = 'text/plain';

        $this->zenSwiftMessageAdapter->setContentType($contentType);

        $this->assertSame($contentType, $this->zenSwiftMessageAdapter->getContentType());
    }

    public function testToString()
    {
        $this->assertNotNull($this->zenSwiftMessageAdapter->__toString());
    }
}