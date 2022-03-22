<?php
class PublicModifierExample
{
    public $name;
    public $age;

    public function getName()
    {
        echo "<br>" . $this->name;
    }

    public function getAge()
    {
        echo "<br>" . $this->age;
    }
}

class PublicChildClass extends PublicModifierExample {

}

$childClass = new PublicChildClass();

$childClass->name = "Aakash Raj Shakya";
$childClass->age = 30;

$childClass->getName();
$childClass->getAge();