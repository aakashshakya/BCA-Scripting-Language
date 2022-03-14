<?php require_once "../configuration/database_configuration.php"; ?>
<?php include_once "../includes/header.php"; ?>
<?php
$sumSql = "Select SUM(price) as total from tbl_product";

$minSql = "Select MIN(price) as minimum from tbl_product";

$maxSql = "Select MAX(price) as maximum from tbl_product";

$averageSql = "Select AVG(price) as average from tbl_product";

$countSql = "Select COUNT(*) as number_of_records from tbl_product";

$sum = mysqli_fetch_assoc(mysqli_query($conn, $sumSql))["total"];
$min = mysqli_fetch_assoc(mysqli_query($conn, $minSql))["minimum"];
$max = mysqli_fetch_assoc(mysqli_query($conn, $maxSql))["maximum"];
$average = mysqli_fetch_assoc(mysqli_query($conn, $averageSql))["average"];
$count = mysqli_fetch_assoc(mysqli_query($conn, $countSql))["number_of_records"];

?>
<h2>The sum of amount of products is <?= $sum ?></h2>
<h2>The minimum amount of product is <?= $min ?></h2>
<h2>The maximum amount of the product is <?= $max ?></h2>
<h2>The average amount of products is <?= $average ?></h2>
<h2>The total number of products is <?= $count ?></h2>

<?php
$sql = "SELECT prod.id, prod.name, prod.price, cat.category_name from tbl_product prod inner join tbl_categories cat 
        on prod.category_id = cat.id
        order by price desc";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<table class="table table-bordered table-striped">
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Category Name</th>
    </tr>
    <?php while ($product = mysqli_fetch_array($result)) { ?>

        <tr>
            <td><?= $product['name']; ?></td>
            <td><?= $product['price']; ?></td>
            <td><?= $product['category_name']; ?></td>
        </tr>

    <?php }
    ?>
</table>
<?php include_once "../includes/footer.php"; ?>