<?php  
include "professionalsHomePage.classes.php";

class getProfessionalsData extends getProfessionals {
    public function getprofessionals() {
        $professionalsData = $this->getprofessionalsInfo();
        return $professionalsData;
    }

}

?>