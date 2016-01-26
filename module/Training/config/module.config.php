<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Training;

return array(
    'router' => array(
        'routes' => array(
            'training_home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal', //Literal  = url exacte
                'options' => array(
                    'route' => '/training',
                    'defaults' => array(
                        'controller' => 'Training\Controller\Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'display' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/display',
                            'defaults' => array(
                                'controller' => 'Training\Controller\Index',
                                'action' => 'display',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'invokables' => array(
            'training.service.cv' => Services\CvService::class,
            'gateway.training.cvgateway' => Gateway\CvGateway::class
        ),
        'factories' => array(
            'training.service' => function() {
                $objetInjecte = new \DateTime();
                $CvService = new Services\CvService();
                $CvService->setObjetInjecte($objetInjecte);
                return $CvService;
            }
        ),
        'initializers' => array(
            Initializer\CvGatewayInitializer::class
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Training\Controller\Index' => Controller\IndexController::class
        ),
        'initializers' => array(
            Initializer\CvServiceInitializer::class,
            Initializer\CvGatewayInitializer::class
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
