<?php

namespace Prueba\Factory\Controller;

/**
 * OneControllerFactory
 *
 *
 *
 * @author Cristian Incarnato
 * @license MIT
 * @link
 */
class OneControllerFactory implements \Zend\ServiceManager\Factory\FactoryInterface
{

    public function __invoke(\Interop\Container\ContainerInterface $container, $requestedName, array $options = array())
    {
        /* @var $em \Doctrine\ORM\EntityManager */
        $em = $container->get("doctrine.entitymanager.orm_default");
        /* @var $grid \ZfMetal\Datagrid\Grid */
        $grid = $container->build("zf-metal-datagrid", ["customOptionsKey" => "Prueba\Entity\One"]);
        return new \Prueba\Controller\OneController($em,$grid);
    }


}

