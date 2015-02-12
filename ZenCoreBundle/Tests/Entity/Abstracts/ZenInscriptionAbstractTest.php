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

namespace ZenMail\ZenCoreBundle\Tests\Entity\Abstracts;

use ZenMail\ZenCoreBundle\Tests\Entity\FakeInscription;

/**
 * Class ZenInscriptionAbstractTest
 * @package ZenMail\ZenCoreBundle\Abstracts
 */
class ZenInscriptionAbstractTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FakeInscription
     */
    private $zenInscription;

    public function setUp(){
        $this->zenInscription = new FakeInscription();
    }

    function testSetSubscribetAt()
    {
        $date = new \DateTime('now');

        $this->zenInscription->setSubscribedAt($date);

        $this->assertEquals($date, $this->zenInscription->getSubscribedAt());
    }

    function testSetUnsubscribeAt()
    {
        $date = new \DateTime('now');

        $this->zenInscription->setUnsubscribeAt($date);

        $this->assertEquals($date, $this->zenInscription->getUnsubscribeAt());
    }
}