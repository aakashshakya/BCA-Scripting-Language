<?php
    //including the configuration file.
    include 'database_configuration.php';
    //If something has been posted from the form
    if($_POST){
        $full_name = $_POST['full_name'];
        $address = $_POST['address'];
        $faculty = $_POST['faculty'];
        $college = $_POST['college'];
        $mobile_number = $_POST['mobile_number'];
        $sql = "INSERT into users (full_name, faculty, address, mobile_number, college) 
        VALUES ('$full_name', '$faculty','$address','$mobile_number','$college')";
        if(mysqli_query($conn, $sql)){
            echo "New record added successfully";
            echo "<br /> <a href='http://localhost/BCA-2076/unit-4/crud/fetch_records.php'
            >Go back</a>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>