<?php


return [
    'router' => [
        'routes' => [
            'home' => [
                'type' => 'Literal',
                'mayTerminate' => true,
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => \Application\Controller\IndexController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ]
];