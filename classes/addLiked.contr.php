<?php
include "../classes/likedPost.classes.php";

class AddLikedPost extends Liked {

    // Add likes in table liked 
    public function addLikes($postId, $clientId) {
        return $this->setLikedPost($postId, $clientId);
    }

}

?>