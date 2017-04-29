<?php

return array(
    'controller_plugins' => array(
        'factories' => array(
            \Prueba\Controller\Plugin\Options::class => \Prueba\Factory\Controller\Plugin\OptionsFactory::class,
        ),
        'aliases' => array(
            'pruebaOptions' => \Prueba\Controller\Plugin\Options::class,
        ),
    ),
);