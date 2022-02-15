<?php
    function showLocalVariable() {
        $localVariable = "I am local variable<br>";
        echo $localVariable;
    }

    function showGlobalVariable() {
        global $globalVariable;
        $globalVariable = "I am global variable<br>";
        echo $globalVariable;
    }

    function showStaticVariable() {
        static $staticVariable = 0;
        $staticVariable++;
        echo $staticVariable."<br>";
    }

    function usingPhpGlobals() {
        $GLOBALS['global_variable'] = "This is super global variable<br>";
    }

    showLocalVariable();
    showGlobalVariable();

    echo "Outside the function declarations. <br>";

    echo $globalVariable;
    // echo $localVariable; //This variable cannot be used since it's scope is inside the showLocaclVariable function

    echo "Static variable example<br>";
    showStaticVariable();
    showStaticVariable();
    showStaticVariable();
    showStaticVariable();
    showStaticVariable();

    echo "Super Global Variable Example<br>";
    usingPhpGlobals();
    echo $GLOBALS['global_variable'];
?>