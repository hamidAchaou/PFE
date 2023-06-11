<?php
include "likedPost.classes.php";

class LikedPosts extends Liked {
    private $Id_Posts;
    private $Id_client;

    public function __construct($Id_Posts, $Id_client) {
        $this->Id_Posts = $Id_Posts;
        $this->Id_client = $Id_client;
    }

    public function addLikedClient() {

        $this->setLikedClient($this->Id_Posts, $this->Id_client);
    }

}
?>