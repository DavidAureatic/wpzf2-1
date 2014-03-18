<?php
//DOCTRINE CONFIG
namespace Cheetara;

return array(
		'doctrine' => array(
				'driver' => array(
						__NAMESPACE__ . '_driver' => array(
								'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
								'cache' => 'array',
								'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
						),
						'orm_default' => array(
								'drivers' => array(
										__NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
								)
							)
						)
					)
				);
//END DOCTRINE CONFIG
			
return array(
    'controllers' => array(
        'invokables' => array(
            'Cheetara\Controller\Index' => 'Cheetara\Controller\IndexController',
        ),
    ),
       'router' => array(
	    'routes' => array(
	        'task' => array(
	            'type'    => 'Segment',
	            'options' => array(
	                'route'    => '/cheetara[/:action[/:id]]',
	                'defaults' => array(
	                    '__NAMESPACE__' => 'Cheetara\Controller',
	                    'controller'    => 'index',
	                    'action'        => 'index',
	                ),
	                'constraints' => array(
	                    'action' => 'add|edit|delete',
	                    'id'     => '[0-9]+',
	                ),
	            ),
	        ),
	    ),
	),
    'view_manager' => array(
        'template_path_stack' => array(
            'Cheetara' => __DIR__ . '/../view',
        ),
    ),
);


