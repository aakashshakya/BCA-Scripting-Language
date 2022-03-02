<?php require_once "../configuration/database_configuration.php" ?>
<?php
$sql = "Select * from tbl_categories";
$result = mysqli_query($conn, $sql);
$categories = [];
$i = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $categories[$i] = $row;
        $i++;
    }
}
mysqli_close($conn);
?>

<?php include_once "../includes/header.php" ?>

<a href="add_category.php">Add Category</a>
<?php if ($categories) { ?>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Category name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($categories as $category) { ?>
            <tr>
                <td><?= $category['category_name'] ?></td>
                <td><?= $category['status'] ? "Active" : "Inactive" ?></td>
                <td>
                    <a href="update_category.php?id=<?= $category['id'] ?>" class="btn btn-warning">Update</a>
                    <a href="delete_category.php?id=<?= $category['id'] ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>
<?php include_once "../includes/footer.php" ?>