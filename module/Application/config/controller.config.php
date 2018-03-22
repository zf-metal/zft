<?php

namespace Application;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            \Application\Controller\IndexController::class => \Zend\ServiceManager\Factory\InvokableFactory::class,
        ],
    ],
];

