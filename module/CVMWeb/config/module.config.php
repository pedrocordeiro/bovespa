<?php

namespace CVMWeb;

use Zend\Router\Http\Segment;

return [
    
    'router' => [
        'routes' => [
            'cvmweb' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/cvmweb[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\CVMWebController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'rad' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/rad[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\RADController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'fidc' => [
                'type'    => Segment::class,
                'options' => [
                    'route' => '/fidc[/:action[/:id]]',
                    'constraints' => [
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ],
                    'defaults' => [
                        'controller' => Controller\FIDCController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
        ],
    ],
    
    'view_manager' => [
        'template_path_stack' => [
            'cvmweb' => __DIR__ . '/../view',
            'rad' => __DIR__ . '/../view',
            'fidc' => __DIR__ . '/../view',
        ],
    ],
];

?>