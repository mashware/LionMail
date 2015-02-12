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

namespace ZenMail\ZenCoreBundle\Factory;

use ZenMail\ZenCoreBundle\Factory\Traits\AbstractFactory;

class CampaignFactory extends AbstractFactory {

    /**
     * Creates an instance of an entity.
     *
     * Queries should be implemented in a repository class
     *
     * This method must always returns an empty instance of the related Entity
     * and initializes it in a consistent state
     *
     * @return CampaignInterface Empty entity
     */
    public function create()
    {
        $classNamespace = $this->getEntityNamespace();
        $campaign = new $classNamespace();

        return $campaign;
    }
}