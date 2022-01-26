<?php
    include "database_configuration.php";
    if($_GET){
        if($_GET["id"]){
            $sql = "Delete from users where id = ".$_GET["id"];
            if(mysqli_query($conn, $sql)){
                echo "Record deleted successfully.";
                echo "<br /> <a href='http://localhost/BCA-2076/unit-4/crud/fetch_records.php'
                     >Go back</a>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Invalid request";
        }
    } else {
        echo "Invalid request";
    }
    //connection close
    mysqli_close($conn);
?>