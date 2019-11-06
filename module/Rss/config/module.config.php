<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Rss\Controller\Rss' => 'Rss\Controller\RssController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'rss' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/rss[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Rss\Controller\Rss',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'rss' => __DIR__ . '/../view',
        ),
    ),
);
