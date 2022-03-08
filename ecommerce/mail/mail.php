<?php include "../includes/header.php" ?>
<?php
if ($_POST) {
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "From: less.secure.email.for.students@gmail.com" . "\r\n";

    $subject = "Ecommerce project registration.";
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $username = $_REQUEST["username"];

    $body = "Hello $name, you have successfully signed up to our ACHS ecommerce website." .
        "<br> Your username is $username. <br> Regards,<br> ACHS eCommerce Project";

    $success = mail($email, $subject, $body, $headers);

    echo $success;
    if (!$success) {
        $errorMessage = error_get_last()['message'];
    }
}
?>

<form class="col-md-6" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php include "../includes/footer.php" ?>