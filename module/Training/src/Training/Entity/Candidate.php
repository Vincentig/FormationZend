<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Entity;

/**
 * Description of Candidate
 *
 * @author hb
 */
class Candidate {

    protected $firstName;
    protected $lastName;
    protected $address;
    protected $phone;
    protected $email;
    protected $birthDay;

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    /**
     * 
     * @return \DateTime
     */
    public function getBirthDay() {
        return $this->birthDay;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    public function setAddress($address) {
        $this->address = $address;
        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function setEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \Training\MyException('Email pas au bon format', \Training\MyException::INVALID_PARAMETER);
        }
        $this->email = $email;
        return $this;
    }

    /**
     * 
     * @param \DateTime $birthDay
     * @return \Training\Entity\Candidate
     */
    public function setBirthDay($birthDay) {
        $this->birthDay = $birthDay;
        return $this;
    }

    public function getAge() {

        return;
    }

}
