<?php
include_once "dbh.php";

class Login extends Dbh {
  

  protected function getUser($email, $password) {
    $stmt = $this->connect()->prepare('SELECT * FROM professionals WHERE Email = ? ;');

    if (!$stmt->execute(array($email))) {
      $stmt = null;
      header("location: ../pages/loginSignUp.php?error=stmtfailed");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("location: ../pages/loginSignUp.php?error=usernorfoundEmail");
      exit();
    }

    $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkPass = password_verify($password, $loginData[0]["password"]);

    if ($checkPass == false) {

      $stmt = null;
      header("location: ../pages/loginSignUp.php?error=worningpassword");
      exit();
    } elseif ($checkPass == true) {
      
      $stmt = $this->connect()->prepare("SELECT * FROM professionals WHERE Email = ? AND password = ?");

      if (!$stmt->execute(array($email, $loginData[0]['password']))) {
        $stmt = null;
        header('location: ../pages/loginSignUp.php?error=stmtfailed');
        exit();
      }
      if ($stmt->rowCount() == 0) {
        $stmt = null;
        header('location: ../pages/loginSignUp.php?error=usernotfoundPass');
        exit();
      }

      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

      session_start();
      $_SESSION['firs_name'] = $user[0]["first_name"];
      $_SESSION['last_name'] = $user[0]["last_name"];
      $_SESSION['Id_Professionals'] = $user[0]["Id_Professionals"];
      $_SESSION['occupation'] = $user[0]["occupation"];
      
      $stmt = null;
    }
  }


  protected function getClient($email, $password) {
    $stmt = $this->connect()->prepare('SELECT * FROM `client` WHERE email = ?;');
  
    if (!$stmt->execute(array($email))) {
      $stmt = null;
      header("location: ../pages/client-loginSignUp.php?error=stmtfailed");
      exit();
    }

    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header("location: ../pages/client-loginSignUp.php?error=usernorfoundEmail");
      exit();
    }

    $loginData = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $checkPass = password_verify($password, $loginData[0]["password"]);

    if ($checkPass == false) {

      $stmt = null;
      header("location: ../pages/client-loginSignUp.php?error=worningpassword");
      exit();
    } elseif ($checkPass == true) {
      
      $stmt = $this->connect()->prepare("SELECT * FROM `client` WHERE email = ? AND password = ?");

      if (!$stmt->execute(array($email, $loginData[0]['password']))) {
        $stmt = null;
        header('location: ../pages/client-loginSignUp.php?error=stmtfailed');
        exit();
      }
      if ($stmt->rowCount() == 0) {
        $stmt = null;
        header('location: ../pages/client-loginSignUp.php?error=usernotfoundPass');
        exit();
      }

      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

      session_start();
      $_SESSION['firs_name'] = $user[0]["first_name"];
      $_SESSION['last_name'] = $user[0]["last_name"];
      $_SESSION['Id_client'] = $user[0]["Id_client"];
      $_SESSION['occupation'] = $user[0]["occupation"];
      
      $stmt = null;
    }
  }
}

?>