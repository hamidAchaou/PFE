<?php

include "professionals.classes.php";

class UpdateProfessionalInfo extends GetProfessionals
{
  private $Id_Professionals;
  private $first_name;
  private $last_name;
  private $email;
  private $password;
  private $city;
  private $phone_number;
  private $gender;
  private $img_profile;
  private $occupation;
  private $description;

  public function __construct($Id_Professionals, $first_name, $last_name, $email, $password, $city, $phone_number, $gender, $img_profile, $occupation,  $description)
  {
    $this->Id_Professionals = $Id_Professionals;
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->password = $password;
    $this->city = $city;
    $this->phone_number = $phone_number;
    $this->gender = $gender;
    $this->img_profile = $img_profile;
    $this->occupation = $occupation;
    $this->description = $description;
  }

  public function updateProfileProfessional() {
    $this->updateProfile($this->Id_Professionals, $this->first_name, $this->last_name, $this->email, $this->password, $this->city, $this->phone_number, $this->gender, $this->img_profile, $this->occupation, $this->description);
  }
}