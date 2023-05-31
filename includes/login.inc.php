<?php

if (isset($_POST['loginSubmit'])) {

    $email = $_POST['emailLogin'];
    $pass = $_POST['loginPassword'];

    // instantiate signupContr class
    include "../classes/login-contr.classes.php";

    $login = new loginContr($email, $pass);

    // running errore handlersand user signup
    $login->loginUser();
    
    // print_r($login);
    echo $_SESSION['firs_name'];
    echo $_SESSION['last_name'];
}

?>