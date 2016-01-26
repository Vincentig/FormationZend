<?php

namespace Training\Entity;

/**
 * Description of AbstractExerience
 *
 * @author hb
 */
abstract class AbstractExperience {

    /**
     *
     * @var \Datetime
     */
    protected $dateEnd;

    /**
     *
     * @var string
     */
    protected $company;

    /**
     *
     * @var string
     */
    protected $title;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var Skill[]
     */
    protected $skills = [];

    /**
     * 
     * @return Skills[]
     */
    public function getSkills() {
        return $this->skills;
    }

    /**
     * 
     * @param type $skill
     * @return AbstractExperience
     */
    public function addSkill($skill) {
        $this->skills[] = $skill;
        return $this;
    }

    public function getDateStart() {
        return $this->dateStart;
    }

    public function getDateEnd() {
        return $this->dateEnd;
    }

    public function getCompany() {
        return $this->company;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDateStart($dateStart) {
        $this->dateStart = $dateStart;
        return $this;
    }

    public function setDateEnd($dateEnd) {
        $this->dateEnd = $dateEnd;
        return $this;
    }

    public function setCompany($company) {
        $this->company = $company;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

}
