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

namespace Mash\LionMail\LionCoreBundle\Tests\Adapter\SwiftMailer;

use Mash\LionMail\LionCoreBundle\Adapter\SwiftMailer\SwiftMessageAdapter;

class SwiftMessageAdapterTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var SwiftMessageAdapter
     */
    private $swiftMessageAdapter;

    public function setUp() {
        /*$swiftMessage = $this->getMockBuilder('\Swift_Message')
            ->disableOriginalConstructor()
            ->getMock()
        ;*/
        $swiftMessage = new \Swift_Message();

        $this->swiftMessageAdapter = new SwiftMessageAdapter($swiftMessage);
    }

    public function testSetOneFrom() {
        $email = 'mashware@gmail.com';

        $this->swiftMessageAdapter->setFrom($email);

        $this->assertSame($email, $this->swiftMessageAdapter->getFrom());
    }


    /*public function testSetSubject() {
        $subject = 'abcdefghijklmnñopq';

        $this->swiftMessage->setSubject($subject);

        $this->assertSame($subject, $this->swiftMessage->getSubject());
    }*/


}