<?php

namespace  ZenMail\ZenSwiftAdapterBundle\Tests\DependencyInjection;

use Matthias\SymfonyConfigTest\PhpUnit\AbstractConfigurationTestCase;
use Symfony\Bundle\TwigBundle\DependencyInjection\TwigExtension;
use ZenMail\ZenSwiftAdapterBundle\DependencyInjection\Configuration;

/**
 * Class ConfigurationTest
 * @package ZenMail\ZenSwiftAdapterBundle\Tests\DependencyInjection
 */
class ConfigurationTest extends AbstractConfigurationTestCase
{
    protected function getConfiguration()
    {
        return new Configuration();
    }

    public function testConfigurationIsInvalid()
    {
        $this->assertConfigurationIsInvalid(
            array(
                array('zen_swift_adapter' => array())
            )
        );


    }
}
