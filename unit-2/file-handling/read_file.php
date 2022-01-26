<?php
    echo "Reading file using readfile function <br /><br />";
    //Reading file using readfile function it also return number of characters
    echo readfile("document.txt");
    
    echo "<br /><br />Read Single line example<br /><br />";

    //Reading single line
    $myfile = fopen("document.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);

    echo "<br /><br /><br />End of file example<br /><br />";

    //Knowing the end of file
    $myfile = fopen("document.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
        echo fgets($myfile) . "<br />";
    }
    fclose($myfile);

?>