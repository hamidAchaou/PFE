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
} elseif (isset($_POST['clientLoginSubmit'])) {
    $email = $_POST['emailLogin'];
    $password = $_POST['loginPassword'];

    // instantiate loginContr class
    include_once "../classes/client-login.contr.php";
  
    $login = new LoginContr($email, $password);
    $clientData = $login->loginClient();



    if (!$clientData) {
        // User not found
        header("location: ../pages/client-loginSignUp.php?error=usernotfoundEmail");
        exit();
    } else {
        // Login successful
        session_start();
        $_SESSION['firs_name'] = $clientData["first_name"];
        $_SESSION['last_name'] = $clientData["last_name"];
        $_SESSION['Id_client'] = $clientData["Id_client"];
        $_SESSION['occupation'] = $clientData["occupation"];
        header('location: ../pages/user/homePage.php?login=success');
        exit();
    }
}

?>
