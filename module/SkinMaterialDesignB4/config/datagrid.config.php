<?php

return [
    'zf-metal-datagrid.options' => [
        'crudConfig' => [
            'enable' => true,
            'side' => "right",
            'displayName' => "Acciones",
            'tdClass' => 'action_column',
            'thClass' => 'action_column',
            'add' => [
                'enable' => true,
                'class' => 'material-icons text-primary cursor-pointer',
                'value' => 'add',
            ],
            'edit' => [
                'enable' => true,
                'class' => 'material-icons text-primary cursor-pointer',
                'value' => 'mode_edit',
            ],
            'del' => [
                'enable' => true,
                'class' => 'material-icons text-danger cursor-pointer',
                'value' => 'delete_sweep'
            ],
            'view' => [
                'enable' => false,
                'class' => 'material-icons text-success cursor-pointer',
                'value' => 'view_list',
            ],
            'manager' => [
                'enable' => false,
                'value' => '',
            ],
        ],
    ],

];
