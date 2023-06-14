<?php
include_once "rating.classes.php";
class RatingController extends Rating {
    private $Id_Professionals;

    public function __construct($Id_Professionals)
    {
        $this->Id_Professionals = $Id_Professionals;
    }

    public function getRatingProfessionals() {
        return $this->getAverageRating($this->Id_Professionals);
    }
}

?>