<?php
// Assuming you have a database connection established
// and a PDO instance named $pdo

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   if (isset($_POST['postId'])) {
//     $postId = $_POST['postId'];
    
//     // Assuming you have a table named 'posts' with columns 'id' and 'likes'
//     $sql = "UPDATE posts SET likes = likes + 1 WHERE id = :postId";
//     $stmt = $pdo->prepare($sql);
//     $stmt->bindParam(':postId', $postId, PDO::PARAM_INT);
//     $stmt->execute();
    
//     // Check if the update was successful
//     if ($stmt->rowCount() > 0) {
//       echo "liked";
//     } else {
//       echo "error";
//     }
//   }
// }


public function getClientForTest($email, $password) {
    $stmt = $this->connect()->prepare('SELECT * FROM `client` WHERE email = ?');
  
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

    return $loginData;
  }

include "../classes/login.classes.php";
$password = "1234";

$liked = new Login();
$dataLiked = $liked->getClientForTest("abdo@gmail.com", $password);    
// print_r($dataLiked); 
// echo $dataLiked[0]["password"];
$checkPass = password_verify($password, $dataLiked[0]["password"]);   
echo $checkPass;
?>
