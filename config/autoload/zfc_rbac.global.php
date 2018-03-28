<?php

return [
    'zfc_rbac' => [
        'guest_role' => 'guest',
        'guards' => [
            'ZfcRbac\Guard\RouteGuard' => [
                'Application*' => ['user'],
            ]
        ],
    ]
];
