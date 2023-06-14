<?php
include_once "dbh.php";

class Rating extends Dbh {

    protected function addRating($Id_Professionals, $Id_client , $num_rating) {
        $stmt = $this->connect()->prepare("INSERT INTO evaluate (Id_Professionals, Id_client , num_rating) VALUES (?, ?, ?)");

        if(!$stmt->execute([$Id_Professionals, $Id_client, $num_rating])) {
            $stmt = null;
            header("location: ../pages/user/homePage.php?erer=stmtfailed");
            exit();
        }
    }

    public function getAverageRating($Id_Professionals) {
        $stmt = $this->connect()->prepare("SELECT AVG(num_rating) AS avg_rating FROM evaluate WHERE Id_Professionals = ? GROUP BY Id_Professionals");
        if(!$stmt->execute([$Id_Professionals])) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
            exit();
        }
        $avg_rating = $stmt->fetchColumn();
        return ($avg_rating !== false) ? $avg_rating : 0;
    }
}

?>