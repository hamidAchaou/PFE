<?php
class RatingController extends Rating {
    private $Id_Professionals;
    private $Id_client;
    private $num_rating;

    public function __construct($Id_Professionals, $Id_client , $num_rating)
    {
        $this->Id_Professionals = $Id_Professionals;
        $this->Id_client = $Id_client;
        $this->num_rating = $num_rating;
    }

    public function addRatingProfessionals() {
        $this->addRating($this->Id_Professionals, $this->Id_client, $this->num_rating,);
        // header("Location: /item/$item_id");
    }
}

?>