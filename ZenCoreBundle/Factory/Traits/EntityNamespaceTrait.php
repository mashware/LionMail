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

/**
 * Trait EntityNamespaceTrait
 *
 * Class EntityNamespaceTrait
 * @package ZenCoreBundle\Factory\Traits
 */
trait EntityNamespaceTrait
{
    /**
     * @var string
     *
     * Entity namespace
     */
    protected $entityNamespace;

    /**
     * Set Entity Namespace
     *
     * @param string $entityNamespace Entity namespace
     *
     * @return $this Self object
     */
    public function setEntityNamespace($entityNamespace)
    {
        $this->entityNamespace = $entityNamespace;

        return $this;
    }

    /**
     * Get entity Namespace
     *
     * @return string Entity Namespace
     */
    public function getEntityNamespace()
    {
        return $this->entityNamespace;
    }
}