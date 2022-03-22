<?php
class PrivateModifierExample
{
    private $name;
    private $age;

    private function getName()
    {
        echo "<br>" . $this->name;
    }

    private function getAge()
    {
        echo "<br>" . $this->age;
    }
}

class PrivateChildClass extends PrivateModifierExample {
    public function printName(){
        echo $this->name;
    }
}

$parentObject = new PrivateModifierExample();

// $parentObject->name = "Aakash";  //This will give error


$childClass = new PrivateChildClass();

$childClass->name = "Aakash Raj Shakya";
$childClass->age = 30;

echo $childClass->name;

$childClass->printName();
// $childClass->getAge();   //This will give error