<?php

include_once "dbh.php";

class Liked extends Dbh {

    // set like p osts in table wonder
    protected function setLikedClient($Id_Posts, $Id_client) {

        $stmt = $this->connect()->prepare("INSERT INTO liked (Id_Posts, Id_client) VALUES (?, ?)");
        
        if(!$stmt->execute(array($Id_Posts, $Id_client))) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
            exit();
        }
    
        $stmt = null;
    }
    
    // get liked posts
    protected function getLikedPosts($Id_Posts) {
        $stmt = $this->connect()->prepare("SELECT * FROM liked WHERE Id_Posts = ?");

        if (!$stmt->execute(array($Id_Posts))) {
            header("location: ../pages/user/works.php?error=stmtfailed");
            exit();
        }

        $rowCount = $stmt->rowCount();
        return $rowCount;
    }



}
?>