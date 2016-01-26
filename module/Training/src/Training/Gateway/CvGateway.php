<?php

namespace Training\Gateway;

use DateTime;
use Training\Entity\Candidate;
use Training\Entity\CV;

/**
 * Description of CvGateway
 *
 * @author hb
 */
class CvGateway {

    public function fetch($id) {
        $candidat = new Candidate();
        $candidat->setAddress('959 route d\'ansouis');
        $candidat->setBirthDay(new DateTime());
        $candidat->setEmail('blackholus@hotmail.com');
        $candidat->setFirstName('Vincent');
        $candidat->setLastName('BOURDONNÉ');
        $candidat->setPhone('0630397549');

        $cv = new CV();
        $cv->setCandidate($candidat);
        $cv->setPresentation('Présentation blablabla blabla blablabla bla balb laa balbla blabla');
        $cv->setTitle('Le titre du CV');

        return $cv;
    }

}
