<?php

namespace Training\Gateway;

/**
 * Description of CvGatewayAwareInterface
 *
 * @author hb
 */
interface CvGatewayAwareInterface {

    public function getCvGateway();

    public function setCvGateway($CvGateway);
}
