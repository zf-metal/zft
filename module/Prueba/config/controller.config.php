<?php

return array(
    'controllers' => array(
        'factories' => array(
            \Prueba\Controller\OneController::class => \Prueba\Factory\Controller\OneControllerFactory::class,
            \Prueba\Controller\TwoController::class => 'Prueba\\Factory\\Controller\\TwoControllerFactory',
        ),
    ),
);