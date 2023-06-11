<?php
  include_once "works.classes.php";

  class updatePostsProfessionals extends WorksInfo {
    private $title;
    private $description;
    private $type;
    private $img_posts;
    private $Id_Posts;

    
    // update data posts 
    public function __construct($title, $description, $type, $img_posts,   $Id_Posts)
    {
        $this->title = $title;
        $this->description = $description;
        $this->type = $type;
        $this->img_posts = $img_posts;
        $this->Id_Posts = $Id_Posts;
    }

    public function updatePostsProfessional() {
        $this->editPostsProfessionals($this->title, $this->description, $this->type, $this->img_posts, $this->Id_Posts);      }
    }
?>