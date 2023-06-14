<?php
include "../../classes/likedPost.classes.php";

class GetLikedPost extends Liked {

    public function hasLikedPost($postId, $clientId) {
        return $this->likedPostExists($postId, $clientId);
    }

    public function getNumLikes($postId) {
        return $this->countLikes($postId);
    }

    // Add likes in table liked 
    public function addLikes($postId, $clientId) {
        return $this->setLikedPost($postId, $clientId);
    }

}

?>