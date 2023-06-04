<?php
include_once "dbh.php";

class WorksInfo extends Dbh {


    // Get all the professionals and posts data
    protected function getWorks() {
        $stmt = $this->connect()->prepare("SELECT * FROM professionals JOIN posts ON professionals.Id_Professionals = posts.Id_Professionals");

        if(!$stmt->execute()) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
            exit();
        }

        $worksData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $worksData;
    }

    // get 3 RAND the professionals Data
    protected function getWorksRand() {
        $stmt = $this->connect()->prepare("SELECT * FROM professionals JOIN posts ON professionals.Id_Professionals = posts.Id_Professionals ORDER BY RAND() LIMIT 3");

        if(!$stmt->execute()) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
            exit();
        }

        $worksDataRand = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $worksDataRand;
    }

    // Get  one professionals and posts data
    protected function getOneWorks($professional) {
        $stmt = $this->connect()->prepare("SELECT * FROM professionals JOIN posts ON professionals.Id_Professionals = posts.Id_Professionals WHERE professionals.Id_Professionals = ?");

        if(!$stmt->execute(array($professional))) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
            exit();
        }

        $worksData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $worksData;
    }

    // Add Works or Posts in table Posts 
    protected function addWorks($title, $description, $date_created, $type, $img_posts, $confirmed, $Id_Professionals) {
        $stmt = $this->connect()->prepare("INSERT INTO posts (title, description, date_created, type, img_posts, confirmed, Id_Professionals) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        if(!$stmt->execute(array($title, $description, $date_created, $type, $img_posts, $confirmed, $Id_Professionals))) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

}
?>