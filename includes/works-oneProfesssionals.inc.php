<?php
include "../../classes/works.contr.php";
include_once "../../classes/professionals.contr.php";

$Id_Professionals = $_GET['Id_Professionals'];
// get one professional 
$professional = new GetProfessionalsData();
$dataProfessional = $professional->oneProfessionalsData($Id_Professionals);
?>

<div class="container my-profile">
    <div class="col-md-14">
        <div class="col-md-4">
            <div class="portlet light profile-sidebar-portlet bordered">
                <div class="profile-userpic mb-0">
                    <img src="../../asset/uploads/<?php echo $dataProfessional[0]['img_profile'] ?>" class="img-responsive" alt>
                </div>
                <div class="rating">
                    <input type="radio" name="rating" value="5" id="5">
                    <label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4">
                    <label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3">
                    <label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2">
                    <label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1">
                    <label for="1">☆</label>
                </div>
                <div class="profile-usertitle mt-0">
                    <div class="profile-usertitle-name"><?php echo $dataProfessional[0]['first_name'] . " " . $dataProfessional[0]['last_name']?></div>
                    <div class="profile-usertitle-job"><?php echo $dataProfessional[0]['occupation'] ?></div>
                </div>
                <div class="container info-contact">
                    <h2 class="card"><i class="fa-solid fa-phone-volume"> </i> <span><?php echo $dataProfessional[0]['phone_number'] ?></span></h2><br>
                    <h2 class="card"><i class="fa-solid fa-envelope"> </i> <span><?php echo $dataProfessional[0]['email'] ?></span></h2>
                </div>
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
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Posts</a></li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active pt-3" id="home">
                                <div role="tabpanel" class="tab-pane" id="profile">

                                    <!-- display card Works Professional -->
                                    <?php

                                    // get professional and works professionals
                                    $worksInfo = new GetWorksData();
                                    $dataWorksProfessionals = $worksInfo->getWorksOneProfessionals($Id_Professionals);
                                    // echo $dataWorksProfessionals[0]["first_name"];

                                    if ($dataWorksProfessionals == null) {
                                        echo '<h4 class="text-center">You have not added any works yet! </h4>';
                                    } else {
                                      foreach ($dataWorksProfessionals as $worksData) {
                                    ?>

                                        <!-- card wPosts Professional -->
                                        <div class="container">
                                            <div class="posts d-flex justify-content-center mx-auto">
                                                <div class="card">
                                                    <div class="card-header d-flex header-posts ">
                                                        <img src="../../asset/images/man-2.jpg" alt="">
                                                        <div class="info-man-posts ml-3">
                                                            <h4><?php echo $worksData['first_name'] . " " . $worksData['last_name'] ?></h4>
                                                            <h6><?php echo $worksData['occupation'] ?></h6>
                                                        </div>
                                                    </div>
                                                    <div class="card-body content-posts m-sm-4 mt-0">
                                                        <h2 class="title-works text-center"><?php echo $worksData['title'] ?></h2>
                                                        <p class="pb-3"><?php echo $worksData['description'] ?></p>
                                                        <img src="../../asset/images/pexels-andrea-piacquadio-3846262.jpg" alt="" srcset="">
                                                        <!-- <h3 class="w-100 d-flex justify-content-center pt-3"><i class="fa-regular fa-heart"></i></h3> -->
                                                    </div>
                                                    <div class="card-footer text-muted">
                                                        <i class="fa-regular fa-heart"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                      } // End Foreach
                                    } // End else
                                    ?>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
