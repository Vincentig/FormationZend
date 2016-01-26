<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Controller;

use Training\Services\CvService;
use Training\Utils\CvServiceAwareInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Description of IndexController
 *
 * @author hb
 */
class IndexController extends AbstractActionController implements CvServiceAwareInterface {

    protected $CvService;

    public function indexAction() {



        //var_dump($this->getCvService());
//        $monService = $this->getServiceLocator()->get('training.service');
//        var_dump($monService);

        $cvGateway = $this->getServiceLocator()->get('service.training.cvgateway');

        return false;
    }

    public function displayAction() {
//        $cv = $this->getCvGateway()->fetch('totoLeHero');
//        $tabVue = $this->getCvService()->exportData($cv);

        $tabVue = $this->getCvService()->fetchResumeData('toto');

        return new ViewModel(array(
            'valeurs' => $tabVue
        ));
    }

    public function setCvService($CvService) {
        $this->CvService = $CvService;
    }

    /**
     * 
     * @return CvService
     */
    public function getCvService() {
        return $this->CvService;
    }

}
