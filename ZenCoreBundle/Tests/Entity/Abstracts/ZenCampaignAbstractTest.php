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

use Doctrine\Common\Collections\ArrayCollection;
use ZenMail\ZenCoreBundle\Tests\Entity\FakeCampaign;
use ZenMail\ZenCoreBundle\Tests\Entity\FakeList;

/**
 * Class ZenCampaignAbstractTest
 * @package ZenMail\ZenCoreBundle\Tests\Abstracts
 */
class ZenCampaignAbstractTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var FakeCampaign
     */
    private $fakeCampaign;

    public function setUp(){
        $this->fakeCampaign = new FakeCampaign();
    }

    public function testSetSubject(){
        $subject = "Hi world!";

        $this->fakeCampaign->setSubject($subject);

        $this->assertEquals($subject, $this->fakeCampaign->getSubject());
    }
    public function testSetFrom(){
        $address = "fake@fake.com";
        $name = "Fake";

        $this->fakeCampaign->setFrom($address, $name);

        $this->assertEquals(array($address, $name), $this->fakeCampaign->getFrom());
    }
    public function testSetLists(){
        $list_1 = new FakeList();
        $list_2 = new FakeList();
        $lists = new ArrayCollection(array($list_1, $list_2));

        $this->fakeCampaign->setLists($lists);

        $this->assertEquals($lists, $this->fakeCampaign->getLists());
    }
}