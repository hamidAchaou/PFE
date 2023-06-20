<?php  
include_once "dbh.php";

class Professionals extends Dbh {
    
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

    // get Number Of professionals  
    protected function getNumProfessionalsInfo() {
        $stmt = $this->connect()->prepare('SELECT COUNT(*) as num_rows FROM professionals;');

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../pages/user/homePage.php?errer=stmtfailed");
            exit();
        }

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $numRows = $result['num_rows'];

        return $numRows;
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

    // get data profesional by search in occupation and city
    public function getProfessionalsByCityAndOccupation($city, $occupation) {
        $query = "SELECT * FROM professionals WHERE city = :city AND occupation = :occupation";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':occupation', $occupation);
        $stmt->execute();
  
        $professionals = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
           $professionals[] = $row;
        }
  
        return $professionals;
     }

    //  Delete Professionals data
    public function deleteProfessional($id) {
        // Delete the professional
        $stmt = $this->connect()->prepare("DELETE FROM Professionals WHERE Id_Professionals = ?");
        $stmt->execute([$id]);
        $stmt = null;

        // Delete the professional's posts
        $stmt = $this->connect()->prepare("DELETE FROM Posts WHERE Id_Professionals = ?");
        $stmt->execute([$id]);
        $stmt = null;

        // Delete the professional's ratings
        $stmt = $this->connect()->prepare("DELETE FROM Evaluate WHERE Id_Professionals = ?");
        $stmt->execute([$id]);
        $stmt = null;
    }
}