<?php
if ($_GET) {
    if (isset($_GET["name"]) && trim($_GET["name"]) && isset($_GET["age"]) && $_GET["age"]) {
        echo "Hello " . $_GET["name"] . ", your age is " . $_GET["age"];
    } else {
        echo "<h3>Invalid request</h3>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>GET HTTP method request example</title>
    <style>
        h3 {
            color: red;
        }
        input {
            margin-right: 10px;
            margin-top: 10px;
            display: flex;
        }
    </style>
</head>

<body>
    <form method="GET" action="">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="number" min="10" name="age" placeholder="Enter your age">
        <input type="submit" value="Submit">
    </form>
</body>

</html>