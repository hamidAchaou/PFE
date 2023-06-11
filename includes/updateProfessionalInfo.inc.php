<?php

if(isset($_POST['uploadProfile'])) {

    // Get form input values
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];
    $phone_number = $_POST['phone_number'];
    $occupation = $_POST['occupation'];
    $description = $_POST['description'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $profile_image = $_FILES['profile_image'];
    $Id_Professionals = $_POST['Id_Professionals'];

    $file_name = $_FILES['profile_image']['name'];
    $file_tmp = $_FILES['profile_image']['tmp_name'];

    if (move_uploaded_file($file_tmp, "../asset/uploads/".$file_name)) {

        include_once "../classes/updateProfessionalInfo.contr.php";
    
        $updateProfile = new UpdateProfessionalInfo($Id_Professionals, $first_name, $last_name, $email, $password, $city, $phone_number, $gender, $file_name, $occupation,  $description);
    
        $updateProfile->updateProfileProfessional();

        header("location: ../pages/user/profile.php?update_successe");

    } else {
        // Handle file upload error
        die("File upload error: Unable to move the uploaded file to the destination directory.");
    }


    

}
?>