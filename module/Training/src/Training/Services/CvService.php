<?php

namespace Training\Services;

use DateTime;
use Training\Entity\Candidate;
use Training\Entity\CV;
use Training\Gateway\CvGateway;
use Training\Gateway\CvGatewayAwareInterface;

class CvService implements CvGatewayAwareInterface {

    protected $objetInjecte;
    protected $cvGateway;

    public function setObjetInjecte($objetInjecte) {
        $this->objetInjecte = $objetInjecte;
    }

    public function fetchResumeData($id) {
        $cv = $this->getCvGateway()->fetch($id);
        $tabRetour = $this->exportData($cv);
        return $tabRetour;
    }

    public function exportData(CV $cv) {

        $candidat = $cv->getCandidate();



        $retour = [
            'titre' => $cv->getTitle(),
            'presentation' => $cv->getPresentation(),
            'candidate' => [
                'age' => $this->getAge($candidat),
                'nom' => $candidat->getLastName(),
                'prenom' => $candidat->getFirstName(),
                'telephone' => $candidat->getPhone(),
//                'email' => $candidat->getEmail()
            ]
        ];

        return $retour;
    }

    public function getAge(Candidate $candidate) {
        return $candidate->getBirthDay()->diff(new DateTime())->y;
    }

    /**
     * 
     * @return CvGateway
     */
    public function getCvGateway() {
        return $this->cvGateway;
    }

    public function setCvGateway($cvGateway) {
        $this->cvGateway = $cvGateway;
    }

}
