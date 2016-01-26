<?php

/**
 * Created by PhpStorm.
 * User: hb
 * Date: 26/01/2016
 * Time: 10:07
 */

namespace Training\Factory;

use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class AbstractServiceFactory implements AbstractFactoryInterface {

    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName) {
        $parts = explode('.', $name);
        return $parts[0] == 'service';
    }

    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName) {
        $parts = explode('.', $name);
        var_dump($parts);
        $className = ucfirst($parts[1]) . '\\Service\\' . ucfirst($parts[2]) . 'Service';
        $instance = new $className; //        if($instance instanceof )
//        {
//
//        }        
        return $instance;
    }

    function __call($name, $arguments) {
        // TODO: Implement __call() method.
    }

}
