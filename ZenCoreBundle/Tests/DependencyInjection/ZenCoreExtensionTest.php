<?php

namespace  ZenMail\ZenCoreBundle\Tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use ZenMail\ZenCoreBundle\DependencyInjection\ZenCoreExtension;

/**
 * Class ZenCoreExtension
 * @package ZenMail\ZenCoreBundle\Tests\DependencyInjection
 */
class ZenCoreExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions()
    {
        return array(
            new ZenCoreExtension()
        );
    }

    public function  testAfterLoadingTheCorrectParameterHasBeenSet()
    {
        $this->load();

        $this->assertContainerBuilderHasParameter('zen.manager.class', 'ZenMail\\ZenCoreBundle\\Services\\ZenManager');
        $this->assertContainerBuilderHasParameter('zen.event.dispatcher.class', 'ZenMail\\ZenCoreBundle\\Services\\ZenEventDispatcher');

    }
}
