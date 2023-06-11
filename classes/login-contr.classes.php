<?php
include_once "../classes/login.classes.php";

class loginContr extends login {
  private $email;
  private $pass;

  public function __construct($email, $pass) {
    $this->email = $email;
    $this->pass = $pass;
  }

  public function loginUser() {
    if ($this->emptyInput() == false) {
      // echo "invalid emptyinput"
      header("location: ../loginSignUp.php?erer=emptyinput");
      exit();
    }
    $this->getUser($this->email, $this->pass);
  }

  private function emptyInput()
  {
    if (empty($this->email) || empty($this->pass)) {
      return false;
    } else {
      return true;
    }
  }
}

?>