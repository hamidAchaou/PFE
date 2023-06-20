<?php
include "../../../classes/works.contr.php";

$postsInfo = new GetWorksData();
$dataWorksProfessionals = $postsInfo->getWorksInfoNotConfirmed();

// Pagination
$worksPerPage = 6; // Define the number of works to display per page
$totalWorks = count($dataWorksProfessionals); // Total number of works
$totalPages = ceil($totalWorks / $worksPerPage); // Calculate the total number of pages

// Get the current page number from the query parameter
$currentpage = isset($_GET['page']) ? $_GET['page'] : 1;

// Ensure the current page is within the valid range
$currentpage = max(1, min($currentpage, $totalPages));

// Calculate the offset for the works array
$offset = ($currentpage - 1) * $worksPerPage;

// Get the works data for the current page
$dataWorksPage = array_slice($dataWorksProfessionals, $offset, $worksPerPage);
?>

<div class="posts">
    <div class="container">
        <div class="posts row d-flex justify-content-center mx-auto">
            <?php foreach ($dataWorksPage as $worksData) : ?>
                <div class="works-posts card col-lg-4 col-md-6 col-sm-12 mb-5 card-professionals">
                    <div class="card-header d-flex header-posts">
                        <img src="../../../asset/uploads/<?php echo $worksData['img_profile'] ?>" alt="">
                        <div class="info-man-posts ml-3">
                            <h4><?php echo $worksData['first_name'] . " " . $worksData['last_name'] ?></h4>
                            <h6><?php echo $worksData['occupation'] . " / " . $worksData['city'] ?></h6>
                        </div>
                    </div>
                    <div class="card-body content-posts mt-0">
                        <h2 class="title-works text-center"><?php echo $worksData['title'] ?></h2>
                        <p class="pb-2 text-center"><?php echo $worksData['description'] ?></p>
                        <img src="../../../asset/uploads/<?php echo $worksData['img_posts'] ?>" alt="" srcset="">
                    </div>
                    <form class="card-footer text-muted d-flex justify-content-center" method="post" action="../../../includes/admin/confirmedWorks.inc.php?id=<?php echo $worksData['Id_Posts'] ?>">
                        <button type="submit" class="btn btn-info" name="confirmedWorks">Confirm</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
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
    </div>
</div>


<style>
    .card {
        margin-bottom: 3%;
    }

    @media (min-width: 992px) {
        .col-lg-4 {
            flex: 0 0 33%;
            max-width: 33%;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .col-md-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
    }

    @media (max-width: 767px) {
        .col-sm-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
    .posts {
        margin-top: 20px;
    }

    .posts .row {
        margin-left: -15px;
        margin-right: -15px;
        
        /* gap: 1%; */
    }

    .posts .works-posts {
        padding: 15px;
    }
</style>
