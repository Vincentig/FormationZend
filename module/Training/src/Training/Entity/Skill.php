<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Training\Entity;

/**
 * Description of Skill
 *
 * @author hb
 */
class Skill {

    /**
     *
     * @var string 
     */
    protected $title;

    /**
     * 
     * @return Skill
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * 
     * @param string $title
     * @return \Training\Skill\Skill
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

}
