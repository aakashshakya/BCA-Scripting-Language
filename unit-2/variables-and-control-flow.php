<?php
    $fullName = "Aakash Raj Shakya";
    $age = 30;
    //Concatenating string in PHP
    echo "Welcome to my page from PHP. Namastey from ".$fullName;
    echo "<br /> My age is ".$age;
    echo "<br />";

    //Conditions
    if($age > 30) {
        echo "Solti timi ta budo vayechau.";
    } else {
        echo "Abhi to mey jawan huu.";
    }

    echo "<br /><br /><br /> While Loop <br />";

    // Loops
    $iteration = 1;

    while($iteration != 5) {
        echo "<br />Inside the while loop. Iteration number ".$iteration;
        $iteration++;
    }
    echo "<br />";
    echo "<br />";

    echo "<br /> Do While Loop <br />";
    $doWhileIteration = 1;
    do {
        echo "<br />Inside the do while loop. Iteration number ".$doWhileIteration;
        $doWhileIteration++;
    } while($doWhileIteration <= 5);

    
    echo "<br />";
    echo "<br />";

    echo "<br /> For Loop <br />";
    for($forIteration = 1; $forIteration <= 5; $forIteration++) {
        echo "<br />Inside the for loop. Iteration number ".$forIteration;
    }

    echo "<br />";
    echo "<br />";

    //Ternary operators
    $number = 565;
    echo ($number%2==0) ? $number." is an odd number." : $number." is an even number";

    //Defining array
    $animals = array(
        'Monkey', 'Dog', 'Cat'
    );
    $fruits = [
        'Apple', 'Banana', 'Mango'
    ];

    $vehicles = array(
        array('Volkswagen', 'Jeep'),
        array('BMW', 'Ferrari'),
        array('Toyota', 'Nissan')
    );

    echo "<br />";
    echo "<br />";

    //Foreach loop

    echo "<br /> Foreach Loop <br />";
    foreach($animals as $animal) {
        echo "<br />".$animal;
    }

    echo "<br />";
    echo "<br />";

    foreach($fruits as $fruit) {
        echo "<br />".$fruit;
    }

    echo "<br />";
    echo "<br />";
    foreach($vehicles as $vehicle) {
        echo $vehicle[1]."<br />";
    }
?>