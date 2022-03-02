<?php require_once "../configuration/database_configuration.php" ?>
<?php
$isInserted = false;
if ($_POST) {
    $categoryName = $_REQUEST['category_name'];
    $sql = "INSERT into tbl_categories (category_name) VALUES ('$categoryName');";
    if (mysqli_query($conn, $sql)) {
        $isInserted = true;
    }
    mysqli_close($conn);
}
?>

<?php include_once "../includes/header.php" ?>

<?php if ($isInserted) { ?>
    <h1>Category added successfully.</h1>
<?php } ?>

<form method="POST">
    <input type="text" name="category_name" required placeholder="Enter category name"> <br>
    <input type="submit" value="Add Category">
</form>

<?php include_once "../includes/footer.php" ?>