<?php
include "works.classes.php";

class AddWorks extends WorksInfo {
    private $title;
    private $date_created;
    private $occupation;
    private $img_posts;
    private $confirmed;
    private $Id_Professionals;
    private $description;

    public function __construct($title, $description, $date_created, $occupation, $img_posts, $confirmed, $Id_Professionals) {
        $this->title = $title;
        $this->description = $description;
        $this->date_created = $date_created;
        $this->occupation = $occupation;
        $this->img_posts = $img_posts;
        $this->confirmed = $confirmed;
        $this->Id_Professionals = $Id_Professionals;
    }

    public function addPosts() {

        $this->addWorks($this->title, $this->description, $this->date_created, $this->occupation, $this->img_posts, $this->confirmed, $this->Id_Professionals);
      }
    


}
?>