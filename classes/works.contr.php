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

    // get all data not confirmed
    public function getWorksInfoNotConfirmed() {
      $worksProfessionals = $this->getWorksNotConfirmed();
      return $worksProfessionals;
    }

    // Update data confirmed posts
    public function updateInfoConfirmedPosts($confirmed, $Id_Posts) {
      $worksProfessionals = $this->updatePost($confirmed, $Id_Posts);
      return $worksProfessionals;
    }

    // Delete data postrs
    public function deleteWorksProfessionals($Id_Posts) {
      $deletePostsProfessionals = $this->deletePosts($Id_Posts);
      return $deletePostsProfessionals;
    }

    // delete Data liked posts 
    public function deleteWorksProfessionalsLiked($Id_Posts) {
      $deletePostsProfessionals = $this->deletePostsLiked($Id_Posts);
      return $deletePostsProfessionals;
    }

  }
?>