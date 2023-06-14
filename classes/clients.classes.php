<?php
include_once 'dbh.php';

class  Clients extends Dbh {
        // Get  Clients Data
        protected function getClients($Id_client) {
            $stmt = $this->connect()->prepare("SELECT * FROM clients WHERE Id_client = ?");
    
            if(!$stmt->execute(array($Id_client))) {
                header("location: ../pages/user/client-profile.php?error=stmtfailed");
                exit();
            }
    
            $clientsData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientsData;
        }
}
?>