<?php
include_once './objects/Character.php';

class Warrior extends Character {

    // Attributes
    private $sword;

    // Constructor
    public function __construct($sword = 12, $life = 10, $def = 0) {
        $this->setSword($sword);
        parent::__construct($life, $def);
    }

    // Getters
    public function getSword() {
        return $this->sword;
    }

    // Setters
    public function setSword($sword) {
        // Secure ...
        $this->sword = $sword;
    }

    // Methods
    public function hydrate($tab) {
        $this->setSword($tab["sword"]);
        $this->setLife($tab["life"]);
        $this->setDef($tab["def"]);
    }

}
