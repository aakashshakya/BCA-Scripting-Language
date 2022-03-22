<?php
class Animal {
    //Defining property(s) of animal
    private $animalName;

    public function setAnimalName($animalName) {
        $this->animalName = $animalName;
    }

    public function getAnimalName() {
        return "The animal is " . $this->animalName;
    }
}
?>