<?php
require_once "configuration/database_configuration.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $content_raw = file_get_contents("php://input"); // THIS IS WHAT YOU NEED
    $data = json_decode($content_raw, true); // THIS IS WHAT YOU NEED

    $sql = "INSERT into tbl_product (name, price, category_id, description) VALUES ('" . $data['product_name'] . "', " . $data['price'] . ", " . $data['category'] . ", '" . $data['description'] . "')";
    if (mysqli_query($conn, $sql)) {
        echo "Product inserted successfully.";
        mysqli_close($conn);
        exit;
    } else {
        header("Bad request", true, 400);
    }
} else {
    $sql = "Select * from tbl_product";
    $result = mysqli_query($conn, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($conn);
    echo json_encode($products);
    exit;
}
