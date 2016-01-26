<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Initializer;

use Training\Utils\CvServiceAwareInterface;
use Zend\Mvc\Controller\ControllerManager;
use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of CvServiceInitializer
 *
 * @author hb
 */
class CvServiceInitializer implements InitializerInterface {

    /**
     * 
     * @param CvServiceAwareInterface $instance
     * @param ControllerManager $serviceLocator
     */
    public function initialize($instance, ServiceLocatorInterface $serviceLocator) {
//        echo 'dans le initializer ' . get_class($instance) . ' de ' . __METHOD__ . '<br/>';
        if ($instance instanceof CvServiceAwareInterface) {
//            echo 'dans le if de' . __METHOD__ . ' <br/>';
            $cvService = $serviceLocator->getServiceLocator()->get('training.service.cv');
            $instance->setCvService($cvService);
        }
    }

}
