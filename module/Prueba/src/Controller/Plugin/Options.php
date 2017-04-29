<?php

namespace Prueba\Controller\Plugin;

/**
 * Options
 *
 * @author Cristian Incarnato
 * @license MIT
 * @link
 */
class Options extends \Zend\Mvc\Controller\Plugin\AbstractPlugin
{

    private $moduleOptions = null;

    public function __construct(\Prueba\Options\ModuleOptions $moduleOptions)
    {
        $this->moduleOptions = $moduleOptions;
    }

    public function __invoke()
    {
        return $this->moduleOptions;
    }


}

