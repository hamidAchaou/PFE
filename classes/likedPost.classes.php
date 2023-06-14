<?php

include_once "dbh.php";

class Liked extends Dbh {

    // set liked posts in table liked
    protected function setLikedPost($postId, $clientId) {

        $stmt = $this->connect()->prepare("INSERT INTO liked (Id_Posts, Id_client) VALUES (?, ?)");

        if (!$stmt->execute(array($postId, $clientId))) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
        header("location: ../pages/user/works.php?addLikes=success");
    }

    // check if a post has been liked by a client
    protected function likedPostExists($postId, $clientId) {
        $stmt = $this->connect()->prepare("SELECT * FROM liked WHERE Id_Posts = ? AND Id_client = ?");

        if (!$stmt->execute(array($postId, $clientId))) {
            header("location: ../pages/user/works.php?error=stmtfailed");
            exit();
        }

        $rowCount = $stmt->rowCount();
        return ($rowCount > 0);
    }

    protected function countLikes($postId) {
        $stmt = $this->connect()->prepare("SELECT COUNT(*) FROM liked WHERE Id_Posts = ?");
        $stmt->execute([$postId]);
        return $stmt->fetchColumn();
    }
}