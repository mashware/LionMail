<?php

namespace  ZenMail\ZenSwiftAdapterBundle\Tests\DependencyInjection;

use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use ZenMail\ZenSwiftAdapterBundle\DependencyInjection\ZenSwiftAdapterExtension;

/**
 * Class ZenCoreExtension
 * @package ZenMail\ZenCoreBundle\Tests\DependencyInjection
 */
class ZenSwiftAdapterExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions()
    {
        return array(
            new ZenSwiftAdapterExtension()
        );
    }

    public function  testAfterLoadingTheCorrectParameterHasBeenSet()
    {
        $this->load();

        $this->assertContainerBuilderHasParameter('zen.swift.mailer.adapter', 'ZenMail\\ZenSwiftAdapterBundle\\Adapter\\ZenSwiftMailerAdapter');
    }
}
