<?php  
include_once "dbh.php";

class GetProfessionals extends Dbh {
    
    // get All data professionals  
    protected function getProfessionalsInfo() {
        $stmt = $this->connect()->prepare('SELECT * FROM professionals;');

        if(!$stmt->execute()) {
            $stmt = null;
            header("location: ../pages/user/homePage.php?erer=stmtfailed");
            exit();
        }

        $professionalsData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $professionalsData;
    }

    // get One Professionals
    protected function getOneProfessionals($Id_Professionals) {
        $stmt = $this->connect()->prepare('SELECT * FROM professionals WHERE Id_Professionals = ?;');

        if(!$stmt->execute(array($Id_Professionals))) {
            $stmt = null;
            header("location: ../pages/user/homePage.php?erer=stmtfailed");
            exit();
        }

        $professionalsData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $professionalsData;
    }

    // get 3 Professionals data
    protected function getProfessionalsHomePage() {
        $stmt = $this->connect()->prepare("SELECT * FROM professionals ORDER BY RAND() LIMIT 3");

        if(!$stmt->execute(array())) {
            $stmt = null;
            header("location: ../pages/user/homePage.php?erer=stmtfailed");
            exit();
        }

        $professionalsData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $professionalsData;
    }

    // Update professional
    protected function updateProfile($Id_Professionals, $first_name, $last_name, $email, $password, $city, $phone_number, $gender, $img_profile, $occupation, $description) {
        // Use double quotes for the SQL query string to allow for variable interpolation
        $stmt = $this->connect()->prepare("UPDATE Professionals
            SET first_name = ?,
                last_name = ?,
                email = ?,
                password = ?,
                city = ?,
                phone_number = ?,
                gender = ?,
                img_profile = ?,
                occupation = ?,
                description = ?
            WHERE Id_Professionals = ?"); // Use a placeholder for the Id_Professionals value
    
        $hashedpass = password_hash($password, PASSWORD_DEFAULT);
    
        // Pass the values as an array to the execute method, including the Id_Professionals value as the last element
        if (!$stmt->execute(array($first_name, $last_name, $email, $hashedpass, $city, $phone_number, $gender, $img_profile, $occupation, $description, $Id_Professionals))) {
            $stmt = null;
            header("location: http://localhost/PFE/KhedmaPro/pages/profile.php?erer=stmtfailed");
            exit();
        }
    
        $stmt = null;
    }
}