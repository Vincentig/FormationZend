<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {

//        $model = new ViewModel();
//        $model->setTemplate('layout/layout');
//        return $model;

        return new ViewModel(array(
            'variable' => 'toto'
        ));
    }

    public function detailAction() {
        
    }

    public function addAction() {
        
    }

    public function editAction() {
        $model = new ViewModel();
        $model->setTemplate('application/edit');
        return $model;
    }

    public function helloWorldAction() {
        
    }

}
