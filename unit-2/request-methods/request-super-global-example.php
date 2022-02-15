<?php
if ($_POST) {
    if (
        isset($_REQUEST["user_name"]) && $_REQUEST["user_name"]
        && isset($_REQUEST["name"]) && $_REQUEST["name"] 
        && isset($_REQUEST["password"]) && $_REQUEST["password"]
    ) {
        echo "Hello " . $_REQUEST["name"] . ", thank you for registering in our webpage.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>$_REQUEST example</title>
    <script>
        function validate() {
            alert(document.form1.name.value);
        }
    </script>
</head>

<body>
    <form method="POST" action="" name="form1" onsubmit="event.preventDefault(); validate();">
        <input type="text" name="name" id="name" placeholder="Enter your full name"><br>
        <input type="text" name="user_name" placeholder="Enter your username"><br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>