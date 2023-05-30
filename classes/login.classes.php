<?php
include_once "dbh.php";

// class login
class Login extends Dbh {

    // get user
    protected function getuser($email, $password) {
        $stmt = $this->connect()->prepare("SELECT * FROM `professionals` WHERE email = ?  AND password = ?")
    }
}

?>