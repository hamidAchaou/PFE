<?php
include_once "../../../classes/professionals.contr.php";

// DECLARE CLASS GetProfessionals
$professionalsInfo = new GetProfessionalsData();
$dataProfessionals = $professionalsInfo->getprofessionals();  // Get Professionals data
?>

<section id="trainers" class="trainers">
    <div class="container section-title text-center">
        <h2>Confirmed Professionals</h2>
    </div>
    <div class="pl-5 pr-5 row justify-content-center w-100 m-0" data-aos="fade-up">

        <!-- Display Professionals Data -->
        <?php
        foreach ($dataProfessionals as $professional) :
        ?>
            <!-- Card Professionals -->
            <div class="w-100 col-lg-4 col-md-6 col-sm-12 mb-4 card-professionals">
                <div class="member card w-100">
                    <img src="../../../asset/uploads/<?php echo $professional["img_profile"] ?>" class="card-img-top" alt="">
                    <div class="card-body member-content">
                        <h3 class="card-title"><?php echo $professional["first_name"] . " " . $professional["last_name"] ?></h3>
                        <p class="card-text"><?php echo $professional["occupation"] ?></p>
                        <p><?php echo $professional["description"] ?></p>
                        <div class="social">
                            <button type="button" class="btn btn-info">More Details</button>
                            <button type="button" class="btn btn-danger" onclick="deleteProfessional(<?php echo $professional['Id_Professionals'] ?>)" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $professional['Id_Professionals'] ?>">DELETE</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>

        <!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Professional</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    </div>
                    <form class="modal-footer" method="post" action="../../../includes/admin/DeleteProfessionals.inc.php">
                        <input type="hidden" name="idPro" id="idPro">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submite" class="btn btn-danger"">Delete</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    function deleteProfessional(id) {
        document.getElementById("idPro").value = id;
        $('#deleteModal').modal('show');
    }
</script>


<?php

// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: GET, POST');
// header('Access-Control-Allow-Headers: Content-Type');

// echo json_encode($dataProfessionals);

// var_dump($dataProfessionals)
?>