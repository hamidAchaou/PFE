<?php
// include "../../classes/professionals.contr.php";

// DECLERE CLASS Get Professionals
$prfessionalsInfo = new GetProfessionalsData();
$dataProfessionals = $prfessionalsInfo->getprofessionals();  // get data Professionals

?>
<!-- display Professionals Data -->
<?php
foreach ($dataProfessionals as $professionnal) :
?>

    <!-- card Professionals -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 card-professionals">
        <div class="card member">
            <img src="../../asset/uploads/<?php echo $professionnal['img_profile'] ?>" class="card-img-top" alt="">
            <div class="card-body member-content">
                <div class="rating">
                    <?php
                    //   get num rating for Professionals
                    include_once "../../classes/get-numRating.contr.php";
                    $numRating = new RatingController($professionnal["Id_Professionals"]);
                    $num_ratings = $numRating->getRatingProfessionals();
                    // var_dump($ratingProfessional);
                    ?>
                    <p class="text-warning"><i class="fas fa-star"></i> <?php echo $num_ratings ?></p>
                </div>
                <h3 class="card-title"><?php echo $professionnal["first_name"] . $professionnal["last_name"] ?></h3>
                <p class="card-text"><?php echo $professionnal["occupation"] ?></p>
                <p><?php echo $professionnal["description"] ?></p>
                <div class="social">
                    <a href="infoProfessionals.php?Id_Professionals=<?php echo $professionnal["Id_Professionals"] ?>" type="button" class="btn btn-primary">Profile</a>
                </div>
            </div>
        </div>
    </div>


<?php
endforeach;
?>
