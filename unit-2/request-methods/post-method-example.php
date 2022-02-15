<?php
if ($_POST) {
    if (
        isset($_POST["user_name"]) && $_POST["user_name"]
        && isset($_POST["name"]) && $_POST["name"] && isset($_POST["password"])
        && $_POST["password"]
    ) {
        echo "Hello " . $_POST["name"] . ", thank you for registering in our webpage.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>POST HTTP method request example</title>
</head>

<body>
    <form method="POST" action="">
        <input type="text" name="name" placeholder="Enter your full name"><br>
        <input type="text" name="user_name" placeholder="Enter your username"><br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>