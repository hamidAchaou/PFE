<?php
session_start();
// echo $_SESSION['Id_client'];

// check if user has clicked the like button
if (isset($_POST['like_post'])) {

    $id_post = $_POST['id_post'];
    $client_id = $_SESSION['Id_client'];

    // get classes and likes 
    include_once "../classes/addLiked.contr.php";
    $classAddLiked = new AddLikedPost();
    $liked = $classAddLiked->addLikes($id_post, $client_id);
    $numLikes = $classAddLiked->getNumLikes($id_post);

    // return JSON response
    header('Content-Type: application/json');
    echo json_encode(array('liked' => $liked, 'numLikes' => $numLikes));
    exit();
}
?>