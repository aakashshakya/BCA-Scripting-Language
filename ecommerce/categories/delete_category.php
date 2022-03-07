<?php include "../configuration/database_configuration.php"; ?>
<?php include "../includes/header.php"; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_REQUEST["id"]) && $_REQUEST["id"]) {
        $sql = "Select * from tbl_categories where id = " . $_REQUEST["id"];
        $result = mysqli_query($conn, $sql);
        $category = mysqli_fetch_assoc($result);
        if (!$category) {
            echo "<h1>Invalid category id.</h1>";
            exit;
        } else {
            $sql = "DELETE from tbl_categories where id = " . $_REQUEST["id"];
            if (mysqli_query($conn, $sql)) {
                echo "<h1>Category deleted successfully.</h1>";
            } else {
                echo "<h1>Unable to delete category.</h1>";
            }
            mysqli_close($conn);
        }
    } else {
        echo "<h1>Invalid Request</h1>";
        exit;
    }
} else {
    echo "<h1>Invalid Request</h1>";
    exit;
}
include "../includes/footer.php"; ?>