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


<!-- <script>
    // checkPassword.js
    axios.post('checkPassword.php', {
        password: '$password'
    })
    .then(function(response) {
        if (response.data.success) {
            console.log(response.data.message);
        } else {
            console.log(response.data.message);
        }
    })
    .catch(function(error) {
        console.log(error);
    });
</script> -->

<?php
// $firstName = $_POST['first_name'];
// echo $firstName;


// // Include necessary files and classes
// require_once 'path/to/Professional.php';
// require_once 'path/to/Database.php';


// // Handle file upload
// if ($_FILES['profile_image']['error'] == UPLOAD_ERR_OK) {
//     $fileTmpPath = $_FILES['profile_image']['tmp_name'];
//     $fileName = $_FILES['profile_image']['name'];
//     $fileSize = $_FILES['profile_image']['size'];
//     $fileType = $_FILES['profile_image']['type'];
//     $fileNameCmps = explode(".", $fileName);
//     $fileExtension = strtolower(end($fileNameCmps));

//     // Generate new file name with unique ID and original extension
//     $newFileName = uniqid() . '.' . $fileExtension;

//     // Define target directory for uploaded file
//     $uploadDir = 'path/to/upload/dir/';

//     // Move uploaded file to target directory
//     $destPath = $uploadDir . $newFileName;
//     move_uploaded_file($fileTmpPath, $destPath);
// } else {
//     // Handle file upload error
// }

// // Save uploaded file details to database
// $db = new Database();
// $professional = new Professional($db);

// $professional->setFirstName($firstName);
// $professional->setLastName($lastName);
// $professional->setCity($city);
// $professional->setPhoneNumber($phoneNumber);
// $professional->setOccupation($occupation);
// $professional->setDescription($description);
// $professional->setEmail($email);
// $professional->setPassword($password);
// $professional->setProfileImage($newFileName);

// if ($professional->save()) {
//     // Handle successful save
// } else {
//     // Handle save error
// }