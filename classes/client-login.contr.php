<?php
include_once "../classes/client-login.classes.php";

class LoginContr extends LoginClient {
    private $email;
    private $password;

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public function loginClient() {
        if ($this->emptyInput() == false) {
            header("location: ../pages/client-logInSignUp.php?error=emptyinput");
            exit();
        }
        
        $clientData = $this->getClient($this->email, $this->password);
        return $clientData;
    }

    private function emptyInput()
    {
        if (empty($this->email) || empty($this->password)) {
            return false;
        } else {
            return true;
        }
    }
}
