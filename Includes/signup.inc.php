<?php
if (isset($_POST["signup-submit"])) {
    // Grabbing the data
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $pwd = $_POST['pwd'];
    $rePwd = $_POST['repwd'];

    // Instantiate Signup Countroller  Class
    include "../Classes/db.class.php";
    include "../Classes/signup.class.php";
    include "../Controller/signup.control.php";
    $signUp = new SignupController($userName, $firstName, $lastName, $email, $pwd, $rePwd);
    // Running error handlers and user signup
    $signUp->signupUser();

    // Going to back to front page
    header("Location: ../sign-up.php?error=none");
}
