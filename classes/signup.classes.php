<?php
include_once "dbh.php";
class signup extends Dbh {
    
    // insert data Professional in databases table Professionls (signUp)
    protected function setUser($first_name, $last_name, $email, $password, $date_created, $city, $phone_number, $date_of_birth, $gender, $occupation, $description) {
    
        $stmt = $this->connect()->prepare("INSERT INTO professionals (first_name, last_name, email, password, date_created, city, phone_number, date_of_birth, gender, occupation, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
        $hashedpass = password_hash($password, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($first_name, $last_name, $email, $hashedpass, $date_created, $city, $phone_number, $date_of_birth, $gender, $occupation, $description))) {
        $stmt = null;
        header("location: http://localhost/PFE/KhedmaPro/pages/loginSignUp.php?erer=stmtfailed");
        exit();
        }

        $stmt = null;
        header("location: ../pages/logInSignUp.php?signUp=success");
    }

    // select email for check Professional email
    protected function checkEmail($email) {
        $stmt = $this->connect()->prepare('SELECT email FROM professionals WHERE Email = ?;');
    
        if (!$stmt->execute(array($email))) {
          $stmt = null;
          header("location: ../pages/user/loginSignUp.php?erer=stmtfailed");
          exit();
        }
    
        if ($stmt->rowCount() > 0) {
          return false;
        } else {
          return  true;
        }
    }

        // Sign up Client
        protected function setClient($first_name, $last_name, $email, $phone_number, $password, $gender) {
    
          $stmt = $this->connect()->prepare("INSERT INTO clients (first_name, last_name, email, phone_number, password, gender) VALUES (?, ?, ?, ?, ?, ?)");
          
          $hashedpass = password_hash($password, PASSWORD_DEFAULT);
  
          if (!$stmt->execute(array($first_name, $last_name, $email, $phone_number, $hashedpass, $gender))) {
          $stmt = null;
          header("location: http://localhost/PFE/KhedmaPro/pages/client-logInSignUp.php?erer=stmtfailed");
          exit();
          }

          $stmt = null;
          header("location: ../pages/client-logInSignUp.php?signUp=success");
      }

      // select email for check Client
      protected function checkEmailClient($email) {
        $stmt = $this->connect()->prepare('SELECT email FROM clients WHERE Email = ?;');
    
        if (!$stmt->execute(array($email))) {
          $stmt = null;
          header("location: ../pages/client-logInSignUp.php?erer=stmtfailed");
          exit();
        }
    
        if ($stmt->rowCount() > 0) {
          return false;
        } else {
          return  true;
        }
    }
}
?>