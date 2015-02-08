<?php

namespace  ZenMail\ZenCoreBundle\Tests\DependencyInjection;

use Matthias\SymfonyConfigTest\PhpUnit\AbstractConfigurationTestCase;
use Symfony\Bundle\TwigBundle\DependencyInjection\TwigExtension;
use ZenMail\ZenCoreBundle\DependencyInjection\Configuration;

/**
 * Class Configuration
 * @package ZenMail\ZenCoreBundle\Tests\DependencyInjection
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
                array('zen_core' => array())
            )
        );


    }
}
