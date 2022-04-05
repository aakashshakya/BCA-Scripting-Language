<?php require_once "../configuration/database_configuration.php"; ?>
<?php include_once "../includes/header.php"; ?>

<?php
if (isset($_REQUEST["id"]) && $_REQUEST["id"]) {
    $sql = "SELECT * from tbl_product prod where id = " . $_REQUEST["id"];
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);
    if (!$product) {
        echo "<h2>Product not found.</h2>";
        exit;
    }

    //Save purchase record in the backend
    $paymentRequestId = "AAKASH-" . rand(1000, 1000000);
    $purchasedDate = date("Y-m-d h:i:s");
    $purchaseInsertSql = "Insert into tbl_purchases (
        product_id, purchased_date, transaction_id, payment_request_id, payment_status, amount
    ) VALUES ('" . $product['id'] . "', '" . $purchasedDate . "', NULL, '" . $paymentRequestId . "', 0, '" . $product['price'] . "')";
    mysqli_query($conn, $purchaseInsertSql);
    mysqli_close($conn);
} else {
    echo "<h2>Invalid Request</h2>";
    exit;
}
?>
<h2>Product Details</h2>
<table class="table table-bordered table-striped">
    <tr>
        <td>Product Name: </td>
        <td><?= $product['name'] ?></td>
    </tr>
    <tr>
        <td>Product Price: </td>
        <td><?= $product['price'] ?></td>
    </tr>
    <tr>
        <td>Product Description: </td>
        <td><?= $product['description'] ?></td>
    </tr>
    <tr>
        <td><a class="btn btn-danger" href="http://localhost/bca-Scripting-Language/ecommerce/products/products.php">Go back</a></td>
        <td>
            <form action="https://uat.esewa.com.np/epay/main" method="POST">
                <input value="<?= $product['price'] ?>" name="tAmt" type="hidden">
                <input value="<?= $product['price'] ?>" name="amt" type="hidden">
                <input value="0" name="txAmt" type="hidden">
                <input value="0" name="psc" type="hidden">
                <input value="0" name="pdc" type="hidden">
                <input value="EPAYTEST" name="scd" type="hidden">
                <input value="<?= $paymentRequestId ?>" name="pid" type="hidden">
                <input value="http://localhost/bca-Scripting-Language/ecommerce/products/success_payment.php?q=su" type="hidden" name="su">
                <input value="http://localhost/bca-Scripting-Language/ecommerce/products/failed_payment.php?q=fu" type="hidden" name="fu">
                <button type="submit" class="btn btn-success">Buy</button>
            </form>
        </td>
    </tr>
</table>
<?php include_once "../includes/footer.php"; ?>