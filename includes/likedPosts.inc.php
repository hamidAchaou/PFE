<?php
session_start();
    include_once "../classes/likedPost.contr.php";
    
    if(isset($_SESSION['id_clent'])) {
        $Id_Posts = $_GET['id_posts'];  
        $id_client = $_SESSION['id_clent'];

        $liked = new LikedPosts($Id_Posts, $id_client);
        $likedPost = $liked->addLikedClient();

        echo "add liked in table liked succses";

    } else {
        echo "add liked not succsess!!";
    }

?>