<?php  
include "professionals.classes.php";

class GetProfessionalsData extends Professionals {

    // get Professionals 
    public function getprofessionals() {
        $professionalsData = $this->getprofessionalsInfo();
        return $professionalsData;
    }

    // get Number Of Professionals 
    public function getNumprofessionals() {
        $professionalsData = $this->getNumProfessionalsInfo();
        return $professionalsData;
    }

    // get Professionals Random
    public function professionalsDataRand() {
        $professionalsDataRand = $this->getProfessionalsHomePage();
        return $professionalsDataRand; 
    }
    
    // get One Professionals
    public function oneProfessionalsData($Id_Professionals) {
        $oneProfessionalsData = $this->getOneProfessionals($Id_Professionals);
        return $oneProfessionalsData; 
    }

    // serch professionals by city and contry
    public function searchByCityAndOccupation($city, $occupation) {
        $getProfessionals = $this->getProfessionalsByCityAndOccupation($city, $occupation);
        return $getProfessionals;
    }

    // Delete Professionals
    public function deleteProfessional($Id_Professionals) {
        $deleteProfessionals = $this->deleteProfessional($Id_Professionals);
        // return $deleteProfessionals;
    }
}

?>