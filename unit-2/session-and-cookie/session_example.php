<?php 
    session_start();
    $_SESSION['student_name'] = "Aakash Raj Shakya";

    echo $_SESSION['student_name'];

    session_unset();
    session_destroy();

    echo "<br /> Here I'm trying to print the session variable again but it will not print. <br />";
    echo $_SESSION['student_name'];
?>