<?php

return [
    'router' => [
        'routes' => [
            [
                'Otro' => [
                    'type' => 'Literal',
                    'mayTerminate' => false,
                    'options' => [
                        'route' => '/otro',
                        'defaults' => [
                            'controller' => 'Prueba\\Controller\\OneController',
                            'action' => 'Algo',
                        ],
                    ],
                ],
                'Module' => [
                    'type' => 'Literal',
                    'mayTerminate' => false,
                    'options' => [
                        'route' => '/module',
                        'defaults' => [
                            'controller' => \Prueba\Controller\OneController::CLASS,
                            'action' => 'Algo',
                        ],
                    ],
                    'child_routes' => [
                        [
                            'route' => [
                                'type' => 'Literal',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/route',
                                    'defaults' => [
                                        'controller' => 'Prueba\\Controller\\OneController',
                                        'action' => 'Algo',
                                    ],
                                ],
                                'child_routes' => [
                                    [
                                        'Create' => [
                                            'type' => 'Segment',
                                            'mayTerminate' => true,
                                            'options' => [
                                                'route' => '/create[/:parentId]',
                                                'defaults' => [
                                                    'controller' => 'Prueba\\Controller\\OneController',
                                                    'action' => 'Algo',
                                                ],
                                            ],
                                        ],
                                    ],
                                    [
                                        'Edit' => [
                                            'type' => 'Segment',
                                            'mayTerminate' => true,
                                            'options' => [
                                                'route' => '/edit[/:routeid]',
                                                'defaults' => [
                                                    'controller' => 'Prueba\\Controller\\OneController',
                                                    'action' => 'Algo',
                                                ],
                                            ],
                                        ],
                                    ],
                                    [
                                        'Vista' => [
                                            'type' => 'Literal',
                                            'mayTerminate' => false,
                                            'options' => [
                                                'route' => '/view',
                                                'defaults' => [
                                                    'controller' => 'Prueba\\Controller\\OneController',
                                                    'action' => 'Algo',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Controller' => [
                                'type' => 'Literal',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/controller',
                                    'defaults' => [
                                        'controller' => \Prueba\Controller\OneController::CLASS,
                                        'action' => 'Algo',
                                    ],
                                ],
                            ],
                        ],
                        [
                            'Entity' => [
                                'type' => 'Literal',
                                'mayTerminate' => false,
                                'options' => [
                                    'route' => '/entity',
                                    'defaults' => [
                                        'controller' => 'Prueba\\Controller\\OneController',
                                        'action' => 'Algo',
                                    ],
                                ],
                                'child_routes' => [
                                    [
                                        'Rol' => [
                                            'type' => 'Literal',
                                            'mayTerminate' => false,
                                            'options' => [
                                                'route' => '/rol',
                                                'defaults' => [
                                                    'controller' => 'Prueba\\Controller\\OneController',
                                                    'action' => 'Algo',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'route' => [
                                'type' => 'Literal',
                                'mayTerminate' => true,
                                'options' => [
                                    'route' => '/route',
                                    'defaults' => [
                                        'controller' => \Prueba\Controller\OneController::CLASS,
                                        'action' => 'Algo',
                                    ],
                                ],
                                'child_routes' => [
                                    [
                                        'Create' => [
                                            'type' => 'Segment',
                                            'mayTerminate' => true,
                                            'options' => [
                                                'route' => '/create[/:parentId]',
                                                'defaults' => [
                                                    'controller' => \Prueba\Controller\OneController::CLASS,
                                                    'action' => 'Algo',
                                                ],
                                            ],
                                        ],
                                    ],
                                    [
                                        'Edit' => [
                                            'type' => 'Segment',
                                            'mayTerminate' => true,
                                            'options' => [
                                                'route' => '/edit[/:routeid]',
                                                'defaults' => [
                                                    'controller' => \Prueba\Controller\OneController::CLASS,
                                                    'action' => 'Algo',
                                                ],
                                            ],
                                        ],
                                    ],
                                    [
                                        'Vista' => [
                                            'type' => 'Literal',
                                            'mayTerminate' => false,
                                            'options' => [
                                                'route' => '/view',
                                                'defaults' => [
                                                    'controller' => \Prueba\Controller\OneController::CLASS,
                                                    'action' => 'Algo',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        [
                            'Entity' => [
                                'type' => 'Literal',
                                'mayTerminate' => false,
                                'options' => [
                                    'route' => '/entity',
                                    'defaults' => [
                                        'controller' => \Prueba\Controller\OneController::CLASS,
                                        'action' => 'Algo',
                                    ],
                                ],
                                'child_routes' => [
                                    [
                                        'Rol' => [
                                            'type' => 'Literal',
                                            'mayTerminate' => false,
                                            'options' => [
                                                'route' => '/rol',
                                                'defaults' => [
                                                    'controller' => \Prueba\Controller\OneController::CLASS,
                                                    'action' => 'Algo',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];