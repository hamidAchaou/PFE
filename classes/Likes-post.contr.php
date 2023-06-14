<?php
session_start();

// check if user has clicked the like button
if (isset($_POST['like_post'])) {

// include "../classes/likedPost.classes.php";

    $id_post = $_POST['id_post'];
    // echo $id_post;
    echo $_SESSION['Id_client'];

    // get classes ad likes 
    include_once "../classes/addLiked.contr.php";
    $classAddLiked = new AddLikedPost();
    $addlikes = $classAddLiked->addLikes($id_post, $_SESSION['Id_client']);


}


?>