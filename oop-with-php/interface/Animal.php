<?php
// Interface definition
interface Animal {
  public function makeSound();
}

interface Body {
    public function legsOfAnimal();
}

// Class definitions
class Cat implements Animal, Body {
  public function makeSound() {
    echo " Meow ";
  }

  public function legsOfAnimal() {
      echo "<br>Cat has 4 legs.";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}

echo $cat->legsOfAnimal();

?>
