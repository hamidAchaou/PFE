<?php
include "../../classes/professionalsHomePage.contr.php";

$prfessionalsInfo = new getProfessionalsData();
$dataProfessionals = $prfessionalsInfo->getprofessionals();
?>


<!-- ====================== start Professionals ===========================-->
<section id="trainers" class="trainers">

    <div class="container section-title text-center">
        <h2>Best Professionals </h2>
        <p>Choose the best professionals for your business</p>
    </div>

    <div class="container pt-3">
        <div class="row">

            <!-- get Professionals -->
            <?php
            foreach ($dataProfessionals as $professionnal) {
            ?>

                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 card-professionals">
                    <div class="card member">
                        <img src="../../asset/images/man-1.jpg" class="card-img-top" alt="">
                        <div class="card-body member-content">
                            <h3 class="card-title"><?php echo $professionnal["first_name"] . $professionnal["last_name"] ?></h3>
                            <p class="card-text"><?php echo $professionnal["occupation"] ?></p>
                            <p><?php echo $professionnal["description"] ?></p>
                            <div class="social">
                              <button type="button" class="btn btn-primary">Profile</button>
                            </div>
                        </div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>

    </div>
</section>