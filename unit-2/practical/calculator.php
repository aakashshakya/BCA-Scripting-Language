<?php
if ($_POST) {
    $firstNumber = $_REQUEST['first_number'];
    $secondNumber = $_REQUEST['second_number'];
    $operation = $_REQUEST['operation'];
    $value = 0;
    switch ($operation) {
        case "addition":
            $value = $firstNumber + $secondNumber;
            break;
        case "subtraction":
            $value = $firstNumber - $secondNumber;
            break;
        case "multiplication":
            $value = $firstNumber * $secondNumber;
            break;
        case "division":
            $value = $firstNumber / $secondNumber;
            break;
        case "modulus":
            $value = $firstNumber % $secondNumber;
            break;
    }

    echo "The output for $operation of $firstNumber and $secondNumber is $value<br>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <form method="POST">
        <input type="text" placeholder="Enter first number" name="first_number" /> <br>
        <input type="text" placeholder="Enter Second number" name="second_number" /> <br>

        <input type="radio" name="operation" value="addition" /> Add<br>
        <input type="radio" name="operation" value="subtraction" /> Subtract<br>
        <input type="radio" name="operation" value="multiplication" /> Multiply<br>
        <input type="radio" name="operation" value="division" /> Divide<br>
        <input type="radio" name="operation" value="modulus" /> Modulus<br>

        <input type="submit" value="submit" />

    </form>
</body>

</html>