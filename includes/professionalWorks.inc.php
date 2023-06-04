<?php
include "../../classes/works.contr.php";

// get id professional
$Id_Professionals = $_SESSION['Id_Professionals'];

// get data professional and data posts professional
$worksInfo = new GetWorksData();
$dataWorksProfessionals = $worksInfo->getWorksOneProfessionals($Id_Professionals);
// echo $dataWorksProfessionals[0]['password']; 

include_once "../../classes/professionals.contr.php";

// get professionals info 
$infoProfessional = new GetProfessionalsData();
$infoOneProfessional = $infoProfessional->oneProfessionalsData($Id_Professionals)
?>


<div class="container my-profile">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-userpic">
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
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Update Profile</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">My works</a></li>
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
                                            <label for="inputPhone">Phone</label>
                                            <input type="text" class="form-control" id="inputPhone" name="phone" value="<?php echo $infoOneProfessional[0]['phone_number'] ?>">
                                        </div>
                                        <div class="form-group col">
                                            <label for="inputPassword">Password</label>
                                            <input type="password" class="form-control" id="inputPassword" name="password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="inputImgProfile">Profile Image</label>
                                            <input type="file" class="form-control-file" id="inputImgProfile" name="img_profile">
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                </form>
                                <!-- end from info Professional -->

                            </div>
                            <div role="tabpanel" class="tab-pane pt-3" id="profile">
                                <?php
                                if ($dataWorksProfessionals == null) {
                                    echo '<h4 class="text-center">You have not added any works yet! </h4>';
                                } else {
                                    foreach ($dataWorksProfessionals as $worksData) { ?>
                                        <!-- card Posts Professional -->
                                        <div class="container mb-4">
                                            <div class="posts d-flex justify-content-center mx-auto">
                                                <div class="card">
                                                    <div class="card-body content-posts m-sm-4 mt-0">
                                                        <h2 class="title-works text-center"><?php echo $worksData['title'] ?></h2>
                                                        <p class="pb-3"><?php echo $worksData['description'] ?></p>
                                                        <img src="../../asset/images/pexels-andrea-piacquadio-3846262.jpg" alt="" srcset="">
                                                        <!-- <h3 class="w-100 d-flex justify-content-center pt-3"><i class="fa-regular fa-heart"></i></h3> -->
                                                    </div>
                                                    <div class="card-footer text-muted d-flex justify-content-center gap-5">
                                                        <button type="button" class="btn btn-info" onclick="editProfessional(<?php echo $worksData['Id_Posts'] ?>);" name="edit" id="edit">Edit</button>
                                                        <button type="button" class="btn btn-danger delete-btn" onclick="deleteProfessional(<?php echo $worksData['Id_Posts'] ?>);" data-toggle="modal" data-target="#exampleModal" data-cardid="<?php echo $worksData['Id_Posts'] ?>">Delete</button>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                }
                                ?>

                                <script type="text/javascript">
                                    // function 
                                    function deleteProfessional(id) {
                                        $(document).ready(function() {
                                            $.ajax({
                                                //action
                                                url: '../element/modalDeleteProfessional.php',
                                                type: 'POST',
                                                data: {
                                                    id: id,
                                                    action: "delete"
                                                },
                                                // success: function(response) {

                                                // }
                                            })
                                        })
                                    }
                                </script>

                                <?php include_once "../../element/modalDeleteProfessional.php" ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>