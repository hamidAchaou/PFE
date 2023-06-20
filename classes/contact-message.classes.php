<?php
include_once "dbh.php";

class Message extends Dbh {


        // set message in table message
        protected function saveMessage($name, $email, $subject, $message) {

            $stmt = $this->connect()->prepare("INSERT INTO message (name, email, subject, message) VALUES (?, ?, ?, ?)");
    
            if (!$stmt) {
                // Handle connection error
                $errorInfo = $this->connect()->errorInfo();
                echo "Connection failed: " . $errorInfo[2];
                exit();
            }
    
            if (!$stmt->execute(array($name, $email, $subject, $message))) {
                header("location: ../pages/user/contact.php?error=stmtfailed");
                exit();
            }
    
            $stmt = null;
        }

        // get message
        
    public function getMessages()
    {
        $query = "SELECT * FROM message";
        $stmt = $this->connect()->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>