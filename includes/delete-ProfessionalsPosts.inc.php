<?php
if (isset($_POST['deleteWorks'])) {

    include_once '../classes/works.contr.php';
    $idPosts = $_POST['idPosts']; // get id Posts
    echo $idPosts;
    
    // get classe and methode delete posts professionals
    $classWorks = new GetWorksData();
    $deletePosts = $classWorks->deleteWorksProfessionals($idPosts);

    // $deleteWorksLiked = $classWorks->deleteWorksProfessionalsLiked($idPosts);
    echo 'delete succses??';
} else {
    echo '??????';
}


?>