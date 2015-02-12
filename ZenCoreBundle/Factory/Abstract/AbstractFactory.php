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

namespace ZenMail\ZenCoreBundle\Factory\Traits;

use ZenMail\ZenCoreBundle\Factory\Traits\EntityNamespaceTrait;

/**
 * Class AbstractFactory
 * @package ZenMail\ZenCoreBundle\Factory\Traits
 *
 * Entity factories create a pristine instance for the specified Entity
 * Entity initialization logic should be placed right here.
 * Injected entity namespace should not be duplicated.
 *
 */
abstract class AbstractFactory
{
    use EntityNamespaceTrait;

    /**
     * Creates an instance of an entity.
     *
     * Queries should be implemented in a repository class
     *
     * This method must always returns an empty instance of the related Entity
     * and initializes it in a consistent state
     *
     * @return Object Empty entity
     */
    abstract public function create();
}
