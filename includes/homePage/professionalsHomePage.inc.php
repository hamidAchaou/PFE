<?php
// include "../../classes/professionals.contr.php";

$prfessionalsInfo = new GetProfessionalsData();
$dataProfessionals = $prfessionalsInfo->professionalsDataRand();

?>
<!-- section display cards Professionals -->
<section id="trainers" class="trainers">

    <div class="container section-title text-center">
        <h2>best professionals</h2>
        <p>get to know me best professionals</p>
    </div>

    <div class="pl-5 pr-5 row justify-content-center w-100 m-0" data-aos="fade-up">

        <!-- display card Professionals  -->
        <?php
        foreach ($dataProfessionals as $professionnal) :
        ?>
            <!-- Card Professionals -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 card-professionals">
                <div class="card member">
                <img src="../../asset/uploads/<?php echo $professionnal['img_profile'] ?>" class="card-img-top img-profile" alt="" style="position: relative;">            <div class="card-body member-content">
                    <h3 class="card-title"><?php echo $professionnal["first_name"] . $professionnal["last_name"] ?></h3>

                        <div class="rating">
                            <?php
                            // Get the number of ratings for professionals
                            include_once "../../classes/get-numRating.contr.php";
                            $numRating = new RatingController($professionnal["Id_Professionals"]);
                            $num_ratings = $numRating->getRatingProfessionals();

                            // Draw stars based on the number of ratings
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= $num_ratings) {
                                    echo '<i class="fas fa-star text-warning"></i>';
                                } else {
                                    echo '<i class="far fa-star"></i>';
                                }
                            }
                            ?>
                        </div>

                        <div>
                            <p class="card-text card w-100"> <?php echo $professionnal["occupation"] . " / " . $professionnal["city"] ?></p>
                            <!-- <p class="card-text card d-flex w-100"> <i class="fa-solid fa-user"></i> <span><?php echo $professionnal["occupation"] ?></span></p> -->
                            <!-- <p class="card-text card w-100"> <i class='fa-solid fa-phone-volume'></i> <?php echo $professionnal["phone_number"] ?></p> -->

                </div>
                <p><?php echo $professionnal["description"] ?></p>
                <div class="social">
                    <a href="infoProfessionals.php?Id_Professionals=<?php echo $professionnal["Id_Professionals"] ?>" type="button" class="btn text-light btn-profile">Profile</a>
                </div>
            </div>
        </div>
    </div>
        <?php
        endforeach;
        ?>
    </div>
</section>

