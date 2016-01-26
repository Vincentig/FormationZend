<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Degree;

/**
 * Description of Degree
 *
 * @author hb
 */
class Degree {

    protected $title;
    protected $place;

    /**
     *
     * @var \DateTime 
     */
    protected $date;

    public function getTitle() {
        return $this->title;
    }

    public function getPlace() {
        return $this->place;
    }

    public function getDate() {
        return $this->date;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setPlace($place) {
        $this->place = $place;
        return $this;
    }

    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

}
