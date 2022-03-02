<?php include "../configuration/database_configuration.php"; ?>
<?php include "../includes/header.php"; ?>
<?php
$isUpdated = false;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_REQUEST["id"]) && $_REQUEST["id"]) {
        $sql = "Select * from tbl_categories where id = " . $_REQUEST["id"];
        $result = mysqli_query($conn, $sql);
        $category = mysqli_fetch_assoc($result);
        mysqli_close($conn);
        if (!$category) {
            echo "<h1>Invalid category id.</h1>";
            exit;
        }
    } else {
        echo "<h1>Invalid Request</h1>";
        exit;
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_REQUEST["id"]) && $_REQUEST["id"]
        && isset($_REQUEST["category_name"]) && $_REQUEST["category_name"]
    ) {
        $categoryName = $_REQUEST["category_name"];
        $sql = "Update tbl_categories set category_name = '$categoryName' where id=" . $_REQUEST["id"];

        if (mysqli_query($conn, $sql)) {
            $isUpdated = true;
            mysqli_close($conn);
        } else {
            echo "<h1>Unable to update data.</h1>";
            mysqli_close($conn);
            exit;
        }
    } else {
        echo "<h1>Invalid request.</h1>";
        exit;
    }
} else {
    echo "<h1>Invalid request.</h1>";
    exit;
}
?>

<?php if ($isUpdated) { ?>
    <h1>Category updated successfully.</h1>
<?php } ?>

<?php if ($_SERVER["REQUEST_METHOD"] == "GET") { ?>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $category['id'] ?>" />
        <input type="text" name="category_name" required value="<?= $category['category_name'] ?>" placeholder="Enter category name"> <br>
        <input type="submit" value="Update Category">
    </form>
<?php } ?>

<?php include "../includes/footer.php"; ?>