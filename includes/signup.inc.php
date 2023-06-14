<?php
    if (isset($_POST['signupSubmit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repeatPass = $_POST['confirm_password'];
        $city = $_POST['city'];
        $description = $_POST['description'];
        $phone_number = $_POST['phone_number'];
        $date_of_birth = $_POST['date_of_birth'];
        $occupation = $_POST['occupation'];
        $gender = $_POST['gender'];


        $date_created = date("Y-m-d");

        include_once "../classes/signup.contr.classes.php";

        $signUp = new signupContr($first_name, $last_name, $email, $password, $repeatPass, $date_created, $city, $phone_number, $date_of_birth, $gender, $occupation, $description);

        $signUp->signupUser();
    }


?>