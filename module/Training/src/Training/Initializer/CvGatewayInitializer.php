<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Initializer;

use Training\Gateway\CvGatewayAwareInterface;
use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Description of CvServiceInitializer
 *
 * @author hb
 */
class CvGatewayInitializer implements InitializerInterface {

    public function initialize($instance, ServiceLocatorInterface $serviceLocator) {
//        echo 'dans le initializer ' . get_class($instance) . ' de ' . __METHOD__ . '<br/>';
        if ($instance instanceof CvGatewayAwareInterface) {
//            echo 'dans le if de' . __METHOD__ . ' <br/>';
            $cvGateway = $serviceLocator->get('gateway.training.cvgateway');
            $instance->setCvGateway($cvGateway);
        }
    }

}
