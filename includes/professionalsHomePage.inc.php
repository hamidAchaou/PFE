<?php
include "../classes/professionals.contr.php";

$prfessionalsInfo = new getProfessionalsData();
$dataProfessionals = $prfessionalsInfo->getprofessionals();
?>

<!-- ====================== start Professionals ===========================-->
<section id="trainers" class="trainers">

    <div class="container section-title text-center">
        <h2>Best Professionals </h2>
        <p>Choose the best professionals for your business</p>
    </div>

    <div class="container pt-3 data-aos=" fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            <!-- get Professionals -->
            <?php
            foreach ($dataProfessionals as $professionnal) {
            ?>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch card-professionals">
                    <div class="member">
                        <img src="../../asset/uploads/<?php echo $professionnal['img_profile']?>" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4><?php echo $professionnal["first_name"] . $professionnal["last_name"] ?></h4>
                            <span><?php echo $professionnal["occupation"] ?></span>
                            <p><?php echo $professionnal["occupation"] ?></p>
                            <div class="social">
                            <a href="infoProfessionals.php?Id_Professionals=<?php echo $professionnal["Id_Professionals"] ?>" type="button" class="btn btn-primary">Profile</a>
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