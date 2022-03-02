<?php
$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "online_quotation";
$conn = mysqli_connect($serverName, $username, $password, $databaseName);
if ($conn->connect_error) {
    die("Error occurred" . $conn->connect_error);
}
