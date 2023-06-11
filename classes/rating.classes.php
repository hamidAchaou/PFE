<?php
include_once "dbh.php";

class Rating extends Dbh {

    protected function addRating($Id_Professionals, $Id_client , $num_rating) {
        $stmt = $this->connect()->prepare("INSERT INTO evaluate (Id_Professionals, Id_client , num_num_rating) VALUES (?, ?, ?)");

        if(!$stmt->execute($Id_Professionals, $Id_client , $num_rating)) {
            $stmt = null;
            header("location: ../pages/user/homePage.php?erer=stmtfailed");
            exit();
        }
    }

    protected function getAverageRating($Id_Professionals, $num_rating) {
        $stmt = $this->connect()->prepare("SELECT AVG(num_rating) AS num_rating FROM evaluate WHERE Id_Professionals = ? ");
        if(!$stmt->execute($Id_Professionals, $num_rating)) {
            $stmt = null;
            header("location: ../pages/user/homePage.php?erer=stmtfailed");
            exit();
        }
        return $stmt;
    }
}

?>