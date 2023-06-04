<?php 
  include "works.classes.php";

  class GetWorksData extends WorksInfo {

    // Get all the professionals' data
    public function getWorksProfessionals() {
        $worksProfessionals = $this->getWorks();
        return $worksProfessionals;
    }

    // get 3 RAND the professionals Data
    public function getWorksProfessionalsRand() {
      $worksProfessionals = $this->getWorksRand();
      return $worksProfessionals;      
    }

    // get works one professionals 
    public function getWorksOneProfessionals($professional) {
      $worksProfessionals = $this->getOneWorks($professional);
      return $worksProfessionals;
    }
  }
?>