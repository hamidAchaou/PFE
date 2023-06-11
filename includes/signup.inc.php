<?php
    if (isset($_POST['signupSubmit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $city = $_POST['city'];
        $description = $_POST['description'];
        $phone_number = $_POST['phone_number'];
        $date_of_birth = $_POST['date_of_birth'];
        $occupation = $_POST['occupation'];
        $gender = $_POST['gender'];


        $date_created = date("Y-m-d");

        include_once "../classes/signup.contr.classes.php";

        $signUp = new signupContr($first_name, $last_name, $email, $password, $date_created, $city, $phone_number, $date_of_birth, $gender, $occupation, $description);

        $signUp->signupUser();
    } elseif (isset($_POST['signupClient'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];



        include_once "../classes/client-signup.contr.classes.php";

        $signUp = new SignupContrClient($first_name, $last_name, $email, $password, $gender);

        $signUp->signupClient();
    }


?>