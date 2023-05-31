<?php  
include_once "dbh.php";

class getProfessionals extends Dbh {
    protected function getProfessionalsInfo() {
        $stmt = $this->connect()->prepare('SELECT * FROM professionals;');

        if(!$stmt->execute([])) {
            $stmt = null;
            header("location: ../pages/user/homePage.php?erer=stmtfailed");
            exit();
        }

        $professionalsData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $professionalsData;
    }
}