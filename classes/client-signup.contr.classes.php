<?php

include "signup.classes.php";

class SignupContrClient extends signup
{
  private $first_name;
  private $last_name;
  private $email;
  private $phone_number;
  private $password;
  private $repeatPass;
  private $gender;

  public function __construct($first_name, $last_name, $email, $phone_number, $password, $repeatPass, $gender)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->phone_number = $phone_number;
    $this->password = $password;
    $this->repeatPass = $repeatPass;
    $this->gender = $gender;
  }

  public function signupClient() {

    if ($this->emailTakenCheack() == false) {
      header("location: ../pages/client-loginSignUp.php?error=emailMatch");
      exit();
    } 

    if ($this->passMatch() == false) {
      header("location: ../pages/client-loginSignUp.php?error=passMatch");
      exit();
    }

    if ($this->invalidEmail() == false) {
      // echo "invalid Email"
      header("location: ../pages/client-loginSignUp.php?error=Email");
      exit();
    }

    $this->setClient($this->first_name, $this->last_name, $this->email, $this->phone_number, $this->password, $this->gender);
  }

  


    // cheack email
    private function emailTakenCheack() { 
      if (!$this->checkEmail($this->email)) {
        return false;
      } else {
        return true;
      }
    }

    // cheack Email
  private function invalidEmail() {
    if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
      return true;
    } else {
      return false;
    }
  }

    // cheack password and confPassword
    private function passMatch() {
      if ($this->password !== $this->repeatPass) {
        return false;
      } else {
        return true;
      }
    }

}

?>