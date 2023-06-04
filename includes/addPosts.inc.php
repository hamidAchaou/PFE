<?php
if (isset($_POST['submitAddWorks'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $occupation = $_POST['occupation'];
    $imageWorks = $_FILES['imageWorks'];
    $Id_Professionals = $_POST["Id_Professionals"];

    // Validate form data
    if (empty($title) || empty($description) || empty($occupation)) {
        die("Please fill in all required fields.");
    }
    $allowed_image_types = array('image/jpeg', 'image/png', 'image/gif');
    $file_type = $_FILES['imageWorks']['type'];
    if (!in_array($file_type, $allowed_image_types)) {
        die("Only JPEG, PNG, and GIF images are allowed.");
    }

    $date_created = date("Y-m-d");
    $confirmed = "false";
    
    $file_name = $_FILES['imageWorks']['name'];
    $file_tmp = $_FILES['imageWorks']['tmp_name'];

    if (move_uploaded_file($file_tmp, "../asset/uploads/".$file_name)) {
        include_once "../classes/addWorks.contr.php";

        // Sanitize input data
        $title = htmlspecialchars($title);
        $description = htmlspecialchars($description);
        $occupation = htmlspecialchars($occupation);

        $addPost = new AddWorks($title, $description, $date_created, $occupation, $file_name, $confirmed, $Id_Professionals);

        $addPost->addPosts();
    } else {
        // Handle file upload error
        die("File upload error: Unable to move the uploaded file to the destination directory.");
    }
}
?>