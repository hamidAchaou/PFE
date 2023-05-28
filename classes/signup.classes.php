<?php
include_once "dbh.php";
class signup extends Dbh {

    protected function setUser($first_name, $last_name, $email, $password, $date_created, $city, $phone_number, $date_of_birth, $gender, $occupation, $description) {
    
        $stmt = $this->connect()->prepare("INSERT INTO professionals (first_name, last_name, email, password, date_created, city, phone_number, date_of_birth, gender, occupation, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        $hashedpass = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($first_name, $last_name, $email, $hashedpass, $date_created, $city, $phone_number, $date_of_birth, $gender, $occupation, $description))) {
        $stmt = null;
        header("location: http://localhost/PFE/KhedmaPro/pages/loginSignUp.php?erer=stmtfailed");
        exit();
        }

        $stmt = null;
    }
}
?>