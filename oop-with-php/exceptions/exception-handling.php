<?php
include "CustomException.php";
class Math {
    private $firstNumber;
    private $secondNumber;

    function __construct($firstNumber, $secondNumber) {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    public function add() {
        return $this->firstNumber + $this->secondNumber;
    }

    public function subtract() {
        //We will throw an exception if the second number is greater than the first number.
        if($this->secondNumber > $this->firstNumber) {
            throw new Exception("Second number cannot be greater than first number.");
        }
        return $this->firstNumber - $this->secondNumber;
    }

    public function multiply() {
        return $this->firstNumber * $this->secondNumber;
    }

    public function divide() {
        //We will throw an exception if the second number is zero
        if($this->secondNumber == 0) {
            throw new CustomException("Cannot divide by Zero.");
        }
        return $this->firstNumber / $this->secondNumber;
    }
}

echo "<h1>This will not give error</h1>";
$math1 = new Math(10, 5);
echo $math1->add()."<br>";
echo $math1->subtract()."<br>";
echo $math1->multiply()."<br>";
echo $math1->divide()."<br>";

echo "<h1>This will give error in divison</h1>";
$math2 = new Math(10, 0);
echo $math2->add()."<br>";
echo $math2->subtract()."<br>";
echo $math2->multiply()."<br>";

try {
    echo $math2->divide()."<br>";
} catch(Exception $ex) {
    echo "Unwanted exception occurred.".$ex->getMessage();
} finally {
    echo "<br>Finally is always called no matter what.";
}
?>
