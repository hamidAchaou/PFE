    <?php
    include_once "dbh.php";

    class LoginClient extends Dbh {
    
        protected function getClient($email, $password) {
            $stmt = $this->connect()->prepare('SELECT * FROM clients WHERE `email` = ?');  
            if (!$stmt->execute(array($email))) {
                $stmt = null;
                header("location: ../pages/client-loginSignUp.php?error=stmtfailed");
                exit();
            }
        
            // Fetch the data and verify the password
            $clientData = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($clientData && password_verify($password, $clientData['password'])) {
                return $clientData;
            } else {
                header("location: ../pages/client-loginSignUp.php?error=usernotfoundPass");
                exit();
            }

            
        }
    }

    ?> 