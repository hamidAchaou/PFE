<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
  // Set PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

// Assuming you have a table named 'posts' with columns 'id' and 'likes'

// Fetch the current like count of a specific post
$postId = 1; // Assuming the post ID is 1
$sql = "SELECT likes FROM posts WHERE id = :postId";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':postId', $postId, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$likeCount = $result['likes'];

// Update the like count of a specific post
$postId = 1; // Assuming the post ID is 1
$sql = "UPDATE posts SET likes = likes + 1 WHERE id = :postId";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':postId', $postId, PDO::PARAM_INT);
$stmt->execute();

// Close the database connection
$pdo = null;
?>
