<?php

namespace Training\Utils;

/**
 * Description of CvServiseAwareInterface
 *
 * @author hb
 */
interface CvServiceAwareInterface {

    public function setCvService($cvService);

    public function getCvService();
}
