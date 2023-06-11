<?php
include "../../../classes/works.contr.php";

$worksInfo = new GetWorksData();
$dataWorksProfessionals = $worksInfo->getWorksInfoNotConfirmed();
?>
<div class="posts">
    <div class="container">
        <div class="posts row d-flex justify-content-center mx-auto">
            <?php
            foreach ($dataWorksProfessionals as $worksData) {
            ?>
            <div class="works-posts col-lg-4 col-md-6 col-sm-12 mb-4 card-professionals">
                <div class="card-header d-flex header-posts">
                    <img src="../../../asset/uploads/<?php echo $worksData['img_profile'] ?>" alt="">
                    <div class="info-man-posts ml-3">
                        <h4><?php echo $worksData['first_name'] . " " . $worksData['last_name'] ?></h4>
                        <h6><?php echo $worksData['occupation'] ?></h6>
                    </div>
                </div>
                <div class="card-body content-posts mt-0">
                    <h2 class="title-works text-center"><?php echo $worksData['title'] ?></h2>
                    <p class="pb-2 text-center"><?php echo $worksData['description'] ?></p>
                    <img src="../../../asset/uploads/<?php echo $worksData['img_posts'] ?>" alt="" srcset="">
                </div>
                <form class="card-footer text-muted d-flex justify-content-center" method="post" action="../../../includes/admin/confirmedWorks.inc.php?id=<?php echo $worksData['Id_Posts'] ?>">
                    <button type="submit" class="btn btn-info" name="confirmedWorks">Confirme</button>
                </form>
            </div>
            <?php
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
</style>
