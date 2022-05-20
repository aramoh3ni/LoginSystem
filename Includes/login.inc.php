<?php
if (isset($_POST["login-submit"])) {
    // Grabbing the data
    $userName = $_POST['username'];
    $pwd = $_POST['password'];

    // Instantiate Signup Countroller  Class
    include "../Classes/db.class.php";
    include "../Classes/login.class.php";
    include "../Controller/login.control.php";
    $signUp = new LoginController($userName, $pwd);

    // Running error handlers and user signup
    $signUp->loginUser();

    // Going to back to front page
    header("Location: ../index.php?error=none");
}
