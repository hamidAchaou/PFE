<!DOCTYPE html> <html lang="en"> <head> <!-- Required meta tags --> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> <!-- css navbar professionnals --> <link rel="stylesheet" href="../element/professionalNavBar/navbar.css"> <!-- Bootstrap CSS --> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> <!-- main css --> <link rel="stylesheet" href="../../asset/css/main.css"> <!-- profile css --> <link rel="stylesheet" href="../../asset/css/profile.css"> <!-- font awesome --> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- Favicons --> <link href="assets/img/favicon.png" rel="icon"> <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> <!-- Google Fonts --> <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> <title>KhedmaPro</title> </head> <body> <!--=================== start navvar ================================ --> <?php session_start(); if(isset($_SESSION['firs_name'])) { include "../../element/navbarProfessionals.php"; } else { include "../../element/navbar.php"; } ?> <!--=================== end navvar ================================ --> <!--=================== start profile ================================ -->
php
Copy
<?php include "../../includes/professionalWorks.inc.php" ?>
<!--=================== end navvar ================================ -->
php-template
Copy
<!--=================== start navvar ================================  -->
<?php include "../../element/footer.php" ?>
<!--=================== end navvar ================================ --> <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <script type="text/javascript"> </script> </body> </html> <?php include "../../classes/works.contr.php";
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

<div class="container my-profile"> <div class="col-md-12"> <div class="col-md-4"> <div class="portlet light profile-sidebar-portlet bordered"> <div class="profile-userpic"> <img src="../../asset//uploads/<?php echo $infoOneProfessional[0]['img_profile'] ?>" class="img-responsive" alt> </div> <div class="profile-usertitle"> <div class="profile-usertitle-name"><?php echo $infoOneProfessional[0]['first_name'] . " " . $infoOneProfessional[0]["last_name"] ?></div> <h3 class="profile-usertitle-job"><?php echo $infoOneProfessional[0]['occupation'] ?></h3> </div> <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label> </div>
angelscript
Copy
        </div>
    </div>
    <div class="col-md-8">
        <div class="portlet light bordered">
            <div class="portlet-title tabbable-line">
                <div class="caption caption-md">
                    <i class="icon-globe theme-font hide"></i>
                    <span class="caption-subject font-blue-madison bold uppercase">Your info</span>
                </div>
            </div>
            <div class="portlet-body">
                <div>

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Update Profile</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">My works</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active pt-3" id="home">

                            <!-- start from info Professional -->
                            <form method="post" action="../../includes/updateProfessionalInfo.inc.php" enctype="multipart/form-data">
                                <div class="row col-md-12">
                                    <input type="hidden" name="Id_Professionals" value="<?php echo $Id_Professionals ?>">
                                    <div class="form-group col-md-6">
                                        <label for="inputName">First Name</label>
                                        <input type="text" class="form-control" id="inputName" name="first_name" value="<?php echo $infoOneProfessional[0]['first_name'] ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputLastName">Last Name</label>
                                        <input type="text" class="form-control" name="last_name" value="<?php echo $infoOneProfessional[0]['last_name'] ?>">
                                    </div>
                                </div>
                                <div class="row col-md-12">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">City</label>
                                        <input type="text" class="form-control" name="city" value="<?php echo $infoOneProfessional[0]['city'] ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputFoneNumber">Phone Number</label>
                                        <input type="text" class="form-control" name="phone_number" value="<?php echo $infoOneProfessional[0]['phone_number'] ?>">
                                    </div>
                                </div>
                                <div class="row col-md-12">
                                    <div class="form-group col-md-6">
                                        <label for="inputOcupation">Ocupation</label>
                                        <input type="text" class="form-control" name="occupation" value="<?php echo $infoOneProfessional[0]['occupation'] ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputDescription">Description</label>
                                        <input type="text" class="form-control" name="description" value="<?php echo $infoOneProfessional[0]['description'] ?>">
                                    </div>
                                </div>
                                <div class="row col-md-12">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email" value="<?php echo $infoOneProfessional[0]['email'] ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputDescription">Gender</label>
                                        <input type="text" class="form-control" name="gender" value="<?php echo $infoOneProfessional[0]['gender'] ?>">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="hidden" name="psw" value="<?php echo $infoOneProfessional[0]['password'] ?>">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="imgProfile">image</label>
                                    <input type="file" name="profile_image" id="imgProfile">
                                    <p class="help-block">From here you can change your profile picture.</p>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-updateProfile" name="uploadProfile">Update Profile</button>
                                </div>
                            </form>
                            <!-- start from info Professional -->

                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">

                            <!-- dispaly card professional Works -->
                            <?php
                            foreach ($dataWorksProfessionals as $worksData) {
                            ?>

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
                                                <button type="button" class="btn btn-danger" onclick="deleteProfessional(<?php echo $worksData['Id_Posts'] ?>);" name="delete" id="delete">Delete</button>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                    Launch demo modal
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php include_once "../element/modalDeleteProfessional.php" ?>

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

                            <?php
                            } // End Foreach
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>