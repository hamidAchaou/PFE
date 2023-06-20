<?php
// include "../../classes/professionals.contr.php";

// DECLARE CLASS Get Professionals
$professionalsInfo = new GetProfessionalsData();
$dataProfessionals = $professionalsInfo->getprofessionals();  // get data Professionals

// Number of professionals to display per page
$professionalsPerPage = 6;

// Chunk the data into pages
$pages = array_chunk($dataProfessionals, $professionalsPerPage);

// Get the current page number from the query string
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Get the professionals for the current page
$currentPageProfessionals = isset($pages[$page - 1]) ? $pages[$page - 1] : [];

?>

<!-- Display Professionals Data -->
<?php foreach ($currentPageProfessionals as $professionnal) : ?>
    <!-- Card Professionals -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 card-professionals">
        <div class="card member">
        <img src="../../asset/uploads/<?php echo $professionnal['img_profile'] ?>" class="card-img-top img-profile" alt="" style="position: relative;">            <div class="card-body member-content">
            <h3 class="card-title"><?php echo $professionnal["first_name"] . " " . $professionnal["last_name"] ?></h3>

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
<?php endforeach; ?>

<!-- Pagination -->
<div class="row">
    <div class="col-md-12">
        <nav aria-label="Professionals Pagination">
            <ul class="pagination justify-content-center">
                <?php for ($i = 1; $i <= count($pages); $i++) : ?>
                    <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
    </div>
</div>
