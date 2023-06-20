<?php
include "../../../classes/works.contr.php";
include_once "../../../classes/professionals.contr.php";

$Id_Professionals = $_GET['Id_Professionals'];
// get one professional 
$professional = new GetProfessionalsData();
$dataProfessional = $professional->oneProfessionalsData($Id_Professionals);

?>

<div class="container my-profile col-md-12">
    <div class="row">
        <div class="col-md-4 w-100">
            <div class="card profile-sidebar-portlet bordered w-100 Pt-0">
                <div class="profile-userpic mb-0 w-100">
                    <img src="../../../asset/uploads/<?php echo $dataProfessional[0]['img_profile'] ?>" class="img-responsive" alt>
                </div>

                <div class="rating">
                    <?php
                    // get num rating for Professionals
                    include_once "../../../classes/get-numRating.contr.php";
                    $numRating = new RatingController($dataProfessional[0]["Id_Professionals"]);
                    $num_ratings = $numRating->getRatingProfessionals();
                    // var_dump($ratingProfessional);
                    ?>
                    <p class="text-warning h3"><i class="fas fa-star"></i> <?php echo $num_ratings ?></p>
                </div>

                <div class="profile-usertitle mt-0">
                    <div class="profile-usertitle-name"><?php echo $dataProfessional[0]['first_name'] . " " . $dataProfessional[0]['last_name'] ?></div>
                    <div class="profile-usertitle-job"><?php echo $dataProfessional[0]['occupation'] ?></div>
                </div>
                <div class="container info-contact w-100">
                    <h2 class="w-100"><i class="fa-solid fa-phone-volume h4"> </i> <span class="h4"><?php echo $dataProfessional[0]['phone_number'] ?></span></h2><br>
                    <h2 class="w-100"><i class="fa-solid fa-envelope h4"> </i> <span class="h4"><?php echo $dataProfessional[0]['email'] ?></span></h2>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card bordered w-100">
                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="nav-item"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="nav-link active">Posts</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active pt-3" id="home">
                            <!-- display card Works Professional -->
                            <?php
                            // get professional and works professionals
                            $worksInfo = new GetWorksData();
                            $dataWorksProfessionals = $worksInfo->getWorksOneProfessionals($Id_Professionals);
                            // echo $dataWorksProfessionals[0]["first_name"];

                            if ($dataWorksProfessionals == null) {
                                echo '<h4 class="text-center">You have not added any works yet!</h4>';
                            } else {
                                foreach ($dataWorksProfessionals as $worksData) {
                            ?>
                                    <!-- card wPosts Professional -->
                                    <div class="container w-100">
                                        <div class="posts d-flex justify-content-center mx-auto w-100 w-sm-100 w-md-75">
                                            <div class="card w-100">

                                                <div class="card-body content-posts m-sm-4 mt-0">
                                                    <h2 class="title-works text-center"><?php echo $worksData['title'] ?></h2>
                                                    <p class="pb-3"><?php echo $worksData['description'] ?></p>
                                                    <img src="../../../asset/uploads/<?php echo $worksData['img_posts'] ?>" alt="" srcset="">
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

<?php
// get rating for this professional
// include_once "../../../classes/rating.classes.php";
// $rating = new Rating();
// $averageRating = $rating->getAverageRating($Id_Professionals);

// if ($averageRating != null) {
//     echo '<div class="container my-5">
//             <div class="card">
//                 <div class="card-body">
//                     <h5 class="card-title">Average Rating:</h5>
//                     <p class="card-text">' . $averageRating . '</p>
//                 </div>
//             </div>
//         </div>';
// }
// 
?>

<script>
    const form = document.querySelector('form');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const data = new FormData(form);
        fetch(form.action, {
                method: form.method,
                body: data
            })
            .then(response => {
                if (response.ok) {
                    // show thank you message or redirect to thank you page
                    console.log('Thank you for rating!');
                } else {
                    console.error('Error submitting rating');
                }
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>