<?php
if (isset($_POST['submitEditWorks'])) {
    
    $Id_Posts = $_POST['idPostsForEdit']; // get id Posts
    $title = $_POST['title']; 
    $description = $_POST['description']; 
    $type = $_POST['occupation']; 
    $imageWorks = $_FILES['imageWorks']; 



    $file_name = $_FILES['imageWorks']['name'];
    $file_tmp = $_FILES['imageWorks']['tmp_name'];

    if (move_uploaded_file($file_tmp, "../asset/uploads/".$file_name)) {

        include_once '../classes/update-PostsProfessionals.contr.php';

        $editPost = new updatePostsProfessionals($title, $description, $type, $file_name, $Id_Posts);
        $updatePost = $editPost->updatePostsProfessional();

        header("location: ../pages/user/profile.php?update_successe");

    } else {
        // Handle file upload error
        die("File upload error: Unable to move the uploaded file to the destination directory.");
    }
}