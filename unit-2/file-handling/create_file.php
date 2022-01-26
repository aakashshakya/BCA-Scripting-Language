<?php
    $myfile = fopen("web.txt", "w")
     or die("Unable to open file!");
    $txt = "I love dogs and cats.";
    //Writing into a file
    fwrite($myfile, $txt);
    //Closing file
    fclose($myfile);
?>