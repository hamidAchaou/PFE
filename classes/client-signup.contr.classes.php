<?php

include "signup.classes.php";

class SignupContrClient extends signup
{
  private $first_name;
  private $last_name;
  private $email;
  private $password;
  private $gender;

  public function __construct($first_name, $last_name, $email, $password, $gender)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->password = $password;
    $this->gender = $gender;
  }

  public function signupClient() {

    if ($this->emailTakenCheack() == false) {
      header("location: ../pages/user/loginSignUp.php?erer=emailMatch");
      exit();
    }

    if ($this->invalidEmail() == false) {
      // echo "invalid Email"
      header("location: ../index.php?erer=Email");
      exit();
    }

    $this->setClient($this->first_name, $this->last_name, $this->email, $this->password, $this->gender);
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

    // // cheack password and confPassword
    // private function passMatch() {
    //   if ($this->pass !== $this->repeatPass) {
    //     return false;
    //   } else {
    //     return true;
    //   }
    // }

}

?>