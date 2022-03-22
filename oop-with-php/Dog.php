<?php
require_once "Animal.php";
class Dog extends Animal {
    public function sound() {
        echo "<br>The dog barks.";
    }
}

$dog = new Dog();
$dog->setAnimalName("Dog");
echo $dog->getAnimalName();
$dog->sound();