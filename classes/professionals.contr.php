<?php  
include "professionals.classes.php";

class GetProfessionalsData extends Professionals {

    public function getprofessionals() {
        $professionalsData = $this->getprofessionalsInfo();
        return $professionalsData;
    }

    public function professionalsDataRand() {
        $professionalsDataRand = $this->getProfessionalsHomePage();
        return $professionalsDataRand; 
    }
    
    public function oneProfessionalsData($Id_Professionals) {
        $oneProfessionalsData = $this->getOneProfessionals($Id_Professionals);
        return $oneProfessionalsData; 
    }

    public function searchByCityAndOccupation($city, $occupation) {
        $getProfessionals = $this->getProfessionalsByCityAndOccupation($city, $occupation);
        return $getProfessionals;
    }
}

?>