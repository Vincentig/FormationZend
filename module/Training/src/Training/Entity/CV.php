<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Entity;

/**
 * Description of CV
 *
 * @author hb
 */
class CV {

    /**
     *
     * @var string
     */
    protected $title;

    /**
     *
     * @var string
     */
    protected $presentation;

    /**
     *
     * @var Candidate
     */
    protected $candidate;

    /**
     *
     * @var Degree[]
     */
    protected $degrees = [];

    /**
     *
     * @var Experience[]
     */
    protected $experiences = [];

    /**
     *
     * @var Trining[]
     */
    protected $trainings = [];

    /**
     * 
     * @return Candidate
     */
    public function getCandidate() {
        return $this->candidate;
    }

    /**
     * 
     * @return Degree[]
     */
    public function getDegrees() {
        return $this->degrees;
    }

    /**
     * 
     * @return Experience[]
     */
    public function getExperiences() {
        return $this->experiences;
    }

    /**
     * 
     * @return Training[]
     */
    public function getTrainings() {
        return $this->trainings;
    }

    /**
     * 
     * @param Candidate $candidate
     * @return CV
     */
    public function setCandidate(Candidate $candidate) {
        $this->candidate = $candidate;
        return $this;
    }

    /**
     * 
     * @param Degree $degree
     * @return CV
     */
    public function addDegree($degree) {
        $this->degrees[] = $degree;
        return $this;
    }

    /**
     * 
     * @param Experience $experience
     * @return CV
     */
    public function addExperience($experience) {
        $this->experiences[] = $experience;
        return $this;
    }

    /**
     * 
     * @param Training $training
     * @return CV
     */
    public function addTraining($training) {
        $this->trainings[] = $training;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * 
     * @return string
     */
    public function getPresentation() {
        return $this->presentation;
    }

    /**
     * 
     * @return string
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * 
     * @return string
     */
    public function setPresentation($presentation) {
        $this->presentation = $presentation;
        return $this;
    }

}
