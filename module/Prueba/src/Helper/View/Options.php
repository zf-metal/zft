<?php

namespace Prueba\Helper\View;

/**
 * Options
 *
 * @author Cristian Incarnato
 * @license MIT
 * @link
 */
class Options extends \Zend\View\Helper\AbstractHelper
{

    private $moduleOptions = null;

    public function __invoke()
    {
        return $this->moduleOptions;
    }

    public function __construct(\Prueba\Options\ModuleOptions $moduleOptions)
    {
        $this->moduleOptions = $moduleOptions;
    }


}

