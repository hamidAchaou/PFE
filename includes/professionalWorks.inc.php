<?php
include "../../classes/works.contr.php";

// get id professional
$Id_Professionals = $_SESSION['Id_Professionals'];

// get data professional and data posts professional
$worksInfo = new GetWorksData();
$dataWorksProfessionals = $worksInfo->getWorksOneProfessionals($Id_Professionals);
// echo $dataWorksProfessionals[0]['password']; 

// include_once "../../classes/professionals.contr.php";

// get professionals info 
$infoProfessional = new GetProfessionalsData();
$infoOneProfessional = $infoProfessional->oneProfessionalsData($Id_Professionals)
?>


<div class="container my-profile mb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-userpic w-100 d-flex justifay-content-center">
                        <img src="../../asset//uploads/<?php echo $infoOneProfessional[0]['img_profile'] ?>" class="img-responsive" alt>
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"><?php echo $infoOneProfessional[0]['first_name'] . " " . $infoOneProfessional[0]["last_name"] ?></div>
                        <h3 class="profile-usertitle-job"><?php echo $infoOneProfessional[0]['occupation'] ?></h3>
                    </div>
                    <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    <h5 class="card-title mb-0">Your info</h5>
                </div>
                <div class="card-body">
                    <div>

                    <ul class="nav nav-tabs" role="tablist">
                        <li id="updateProfileTab" role="presentation" class="mr-4 border border-secondary  p-2 active text-light"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Update Profile</a></li>
                        <li id="myWorksTab" role="presentation" class="border border-secondary p-2 text-light"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">My works</a></li>
                    </ul>


                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active pt-3" id="home">

                                <!-- start from info Professional -->
                                <form method="post" action="../../includes/updateProfessionalInfo.inc.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <input type="hidden" name="Id_Professionals" value="<?php echo $Id_Professionals ?>">
                                        <div class="form-group col">
                                            <label for="inputName">First Name</label>
                                            <input type="text" class="form-control" id="inputName" name="first_name" value="<?php echo $infoOneProfessional[0]['first_name'] ?>">
                                        </div>
                                        <div class="form-group col">
                                            <label for="inputLastName">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" value="<?php echo $infoOneProfessional[0]['last_name'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="inputEmail">Email address</label>
                                            <input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo $infoOneProfessional[0]['email'] ?>">
                                        </div>
                                        <div class="form-group col">
                                            <label for="inputOccupation">Occupation</label>
                                            <input type="text" class="form-control" id="inputOccupation" name="occupation" value="<?php echo $infoOneProfessional[0]['occupation'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="inputPhone">Phone Number</label>
                                            <input type="text" class="form-control" id="inputPhone" name="phone_number" value="<?php echo $infoOneProfessional[0]['phone_number'] ?>">
                                        </div>
                                        <div class="form-group col">
                                            <label for="inputPassword">Password</label>
                                            <input type="password" class="form-control" id="inputPassword" name="password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="inputPhone">city</label>
                                            <input type="text" class="form-control" id="inputPhone" name="city" value="<?php echo $infoOneProfessional[0]['city'] ?>">
                                        </div>
                                        <div class="form-group col">
                                            <label for="inputPassword">description</label>
                                            <input type="texte" class="form-control" id="description" name="description" value="<?php echo $infoOneProfessional[0]['description'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="inputImgProfile">Profile Image</label>
                                            <input type="file" class="form-control-file" id="inputImgProfile" name="profile_image">
                                        </div>
                                        <div class="form-group col">
                                            <label for="gender">Gender:</label>
                                            <select id="gender" name="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>

                                        </div>
                                    </div>
                                    <button type="submit" name="uploadProfile" class="btn btn-primary">Update</button>
                                </form>
                                <!-- end from info Professional -->

                            </div>
                            <div role="tabpanel" class="tab-pane pt-3" id="profile">
                                <?php
                                if ($dataWorksProfessionals == null) {
                                    echo '<h4 class="text-center">You have not added any works yet! </h4>';
                                } else {
                                    foreach ($dataWorksProfessionals as $worksData) {
                                ?>
                                        <!-- card Posts Professional -->
                                        <div class="container mb-4 w-100">
                                            <div class="posts d-flex justify-content-center mx-auto w-100">
                                                <div class="card w-75 w-sm-100">
                                                    <div class="card-body content-posts m-sm-4 mt-0">
                                                        <h2 class="title-works text-center"><?php echo $worksData['title'] ?></h2>
                                                        <p class="pb-3"><?php echo $worksData['description'] ?></p>
                                                        <img src="../../asset/uploads/<?php echo $worksData['img_posts'] ?>" alt="" srcset="">
                                                        <!-- <h3 class="w-100 d-flex justify-content-center pt-3"><i class="fa-regular fa-heart"></i></h3> -->
                                                    </div>
                                                    <div class="card-footer text-muted d-flex justify-content-center gap-5">
                                                        <button type="button" class="btn btn-info" onclick="editProfessionalPosts(<?php echo $worksData['Id_Posts']  ?>)" data-toggle="modal" data-target="#editModal" data-id="<?php echo $professional['Id_Posts'] ?>">EDIT</button>
                                                        <button type="button" class="btn btn-danger ml-3" onclick="deleteProfessionalPosts(<?php echo $worksData['Id_Posts']  ?>)" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $professional['Id_Posts'] ?>">DELETE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                                <!-- include modal delete Posts Professionals -->
                                <?php include_once "../../element/modal-DeletePostProfessional.php" ?>
                                <!-- include modale edite  -->
                                <?php include_once "../../element/modal-editPostsProfessiional.php" ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


