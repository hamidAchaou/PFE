<?php
    include "../../classes/likedPost.classes.php";

    class GetLikedPost extends Liked {

        public function getLikedPost($Id_Posts) {
            $this->getLikedPosts($Id_Posts);
        }
    }

?>