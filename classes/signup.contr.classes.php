<?php

include "signup.classes.php";

class signupContr extends signup
{
  private $first_name;
  private $last_name;
  private $email;
  private $password;
  private $repeatPass;
  private $date_created;
  private $city;
  private $phone_number;
  private $date_of_birth;
  private $gender;
  private $occupation;
  private $description;

  public function __construct($first_name, $last_name, $email, $password, $repeatPass, $date_created, $city, $phone_number, $date_of_birth, $gender, $occupation, $description)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->password = $password;
    $this->repeatPass = $repeatPass;
    $this->date_created = $date_created;
    $this->city = $city;
    $this->phone_number = $phone_number;
    $this->date_of_birth = $date_of_birth;
    $this->gender = $gender;
    $this->occupation = $occupation;
    $this->description = $description;
  }

  public function signupUser() {


    if ($this->passMatch() == false) {
      header("location: ../pages/loginSignUp.php?error=passMatch");
      exit();
    }

    if ($this->emailTakenCheack() == false) {
      header("location: ../pages/loginSignUp.php?error=emailMatch");
      exit();
    } 

    if ($this->invalidEmail() == false) {
      // echo "invalid Email"
      header("location: ../index.php?error=Email");
      exit();
    }

    $this->setUser($this->first_name, $this->last_name, $this->email, $this->password, $this->date_created, $this->city, $this->phone_number, $this->date_of_birth, $this->gender, $this->occupation, $this->description);
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