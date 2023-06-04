<?php
include "../../classes/professionals.contr.php";

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
            <!-- card Professionals -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 card-professionals">
                <div class="card member">
                    <img src="../../asset/uploads/<?php echo $professionnal['img_profile'] ?>" class="card-img-top" alt="">
                    <div class="card-body member-content">
                        <h3 class="card-title"><?php echo $professionnal["first_name"] . " " . $professionnal["last_name"] ?></h3>
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
    </div>
</section>


<?php

// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, POST');
// header('Access-Control-Allow-Headers: Content-Type');

// echo json_encode($dataProfessionals);

// var_dump($dataProfessionals)
?>