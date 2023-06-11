<?php
include_once "../classes/login.classes.php";

class loginContr extends login {
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
    
    $this->getClient($this->email, $this->password);
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
?>