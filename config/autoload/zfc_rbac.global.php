<?php

return [
    'zfc_rbac' => [
        'guards' => [
            'ZfcRbac\Guard\RouteGuard' => [
                 'Application*' => ['user'],
            ]
        ],
    ]
];
