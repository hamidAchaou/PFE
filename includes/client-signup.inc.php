<?php
 if (isset($_POST['signupClient'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $repeatPass = $_POST['repeatPass'];
    $gender = $_POST['gender'];



    include_once "../classes/client-signup.contr.classes.php";

    $signUp = new SignupContrClient($first_name, $last_name, $email, $phone_number, $password, $repeatPass, $gender);

    $signUp->signupClient();
}
?>