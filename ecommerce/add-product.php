<?php include_once "includes/header.php" ?>

<form method="POST" action="" enctype="multipart/form-data">
    <input type="text" placeholder="Enter your product name" name="product_name" required><br>
    <select name="category">
        <option>Electronics</option>
        <option>Automobiles</option>
        <option>Food and beverages</option>
        <option>Clothing</option>
    </select><br>
    <input type="text" placeholder="Enter the product price" name="product_price" required><br>
    <textarea name="product_description" cols="30" rows="10" placeholder="Enter product description"></textarea><br>
    <input type="file" name="product_image" required><br>
    <input type="submit" value="Save product" /> <a href="products.php">Cancel</a>
</form>

<?php include_once "includes/footer.php" ?>