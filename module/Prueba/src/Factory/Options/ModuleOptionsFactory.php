<?php

namespace Prueba\Factory\Options;

/**
 * ModuleOptionsFactory
 *
 *
 *
 * @author Cristian Incarnato
 * @license MIT
 * @link
 */
class ModuleOptionsFactory implements \Zend\ServiceManager\Factory\FactoryInterface
{

    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = array())
    {
        $config = $container->get('Config');
         return new \Prueba\Factory\Options\Options\ModuleOptions(isset($config['Prueba.options']) ? $config['Prueba.options'] : array());
    }


}

