<?php

if (isset($_POST['loginSubmit'])) {

    $email = $_POST['emailLogin'];
    $pass = $_POST['loginPassword'];

    // instantiate loginContr class
    include "../classes/login-contr.classes.php";

    $login = new loginContr($email, $pass);
    // $data = $login->getResponse();
    // running error handlers and user login
    $login->loginUser();
    header('location: ../pages/user/homePage.php');


    // // set content type to JSON
    // header('Content-Type: application/json');

    // header('Access-Control-Allow-Origin: *');
    // header('Access-Control-Allow-Methods: GET, POST');
    // header('Access-Control-Allow-Headers: Content-Type');

    // echo json_encode($login);
}


?>