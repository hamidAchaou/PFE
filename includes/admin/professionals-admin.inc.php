<?php
include_once "../../../classes/professionals.contr.php";

// DECLARE CLASS GetProfessionals
$professionalsInfo = new GetProfessionalsData();
$dataProfessionals = $professionalsInfo->getprofessionals();  // Get Professionals data

$professionalsPerPage = 6; // Define the number of professionals to display per page
$totalProfessionals = count($dataProfessionals); // Total number of professionals
$totalPages = ceil($totalProfessionals / $professionalsPerPage); // Calculate the total number of pages

// Get the current page number from the query parameter
$currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

// Ensure the current page is within the valid range
$currentpage = max(1, min($currentpage, $totalPages));

// Calculate the offset for the professionals array
$offset = ($currentpage - 1) * $professionalsPerPage;

// Get the professionals data for the current page
$dataProfessionalsPage = array_slice($dataProfessionals, $offset, $professionalsPerPage);
?>

<section id="trainers" class="trainers">
    <div class="container section-title text-center">
        <h2 class="pb-3">Professionals</h2>
    </div>
    <div class="pl-5 pr-5 row justify-content-center w-100 m-0" data-aos="fade-up">

        <!-- Display Professionals Data -->
        <?php foreach ($dataProfessionalsPage as $professional) : ?>
            <!-- Card Professionals -->
            <div class="w-100 col-lg-4 col-md-6 col-sm-12 mb-4 card-professionals">
                <div class="member card card-pro w-100">
                    <img src="../../../asset/uploads/<?php echo $professional["img_profile"] ?>" class="card-img-top" alt="">
                    <div class="card-body member-content">
                        <h3 class="card-title"><?php echo $professional["first_name"] . " " . $professional["last_name"] ?></h3>
                        <p class="card-text"><?php echo $professional["occupation"] . " / " . $professional["city"] ?></p>
                        <p><?php echo $professional["description"] ?></p>
                        <div class="social">
                            <a href="moreDetailsProfessionals.php?Id_Professionals=<?php echo $professional["Id_Professionals"] ?>" type="button" class="btn btn-primary text-light">More Details</a>
                            <button type="button" class="btn btn-danger" onclick="deleteProfessional(<?php echo $professional['Id_Professionals'] ?>)" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $professional['Id_Professionals'] ?>">DELETE</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="pagination">
            <?php
            // Display Previous Page link if not on the first page
            if ($currentpage > 1) {
                echo '<a href="?page=' . ($currentpage - 1) . '">Previous</a>';
            }

            // Display page links
            for ($i = 1; $i <= $totalPages; $i++) {
                if ($i == $currentpage) {
                    echo '<span class="current-page">' . $i . '</span>';
                } else {
                    echo '<a href="?page=' . $i . '">' . $i . '</a>';
                }
            }

            // Display Next Page link if not on the last page
            if ($currentpage < $totalPages) {
                echo '<a href="?page=' . ($currentpage + 1) . '">Next</a>';
            }
            ?>
        </div>

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
                        <button type="submit" class="btn btn-danger">Delete</button>
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


