<?php 


return [
        'doctrine' => array(
        'driver' => array(
            'prueba_entity' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => __DIR__ . '/../src/Entity',
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Turnos\Entity' => 'prueba_entity',
                ),
            ),
        ),
    ),
];
