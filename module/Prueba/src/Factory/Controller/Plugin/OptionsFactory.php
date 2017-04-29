<?php

namespace Prueba\Factory\Controller\Plugin;

/**
 * OptionsFactory
 *
 *
 *
 * @author Cristian Incarnato
 * @license MIT
 * @link
 */
class OptionsFactory implements \Zend\ServiceManager\Factory\FactoryInterface
{

    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = array())
    {
        $servicio = $container->get('Prueba.options');
        return new \Prueba\Controller\Plugin\Options($servicio);
    }


}

