<?php
include "../../classes/works.contr.php";
include_once "../../classes/getLiked.contr.php";

$worksInfo = new GetWorksData();
$dataWorksProfessionals = $worksInfo->getWorksProfessionals();

?>
<div class="posts">

    <?php
    if ($dataWorksProfessionals == null) {
        echo '<h4 class="text-center">You have not added any works yet! </h4>';
    } else {
    foreach ($dataWorksProfessionals as $worksData) {
    ?>

        <div class="container">
            <div class="posts d-flex justify-content-center mx-auto">
                <div class="card">
                    <div class="card-header d-flex header-posts ">
                        <img src="../../asset/uploads/<?php echo $worksData['img_profile'] ?>" alt="">
                        <div class="info-man-posts ml-3">
                            <h4><?php echo $worksData['first_name'] . " " . $worksData['last_name'] ?></h4>
                            <h6><?php echo $worksData['occupation'] ?></h6>
                        </div>
                    </div>
                    <div class="card-body content-posts m-sm-4 mt-0">
                        <h2 class="title-works text-center"><?php echo $worksData['title'] ?></h2>
                        <p class="pb-3"><?php echo $worksData['description'] ?></p>
                        <img src="../../asset/uploads/<?php echo $worksData['img_posts'] ?>" alt="" srcset="">
                        <!-- <h3 class="w-100 d-flex justify-content-center pt-3"><i class="fa-regular fa-heart"></i></h3> -->
                    </div>
                    <div class="card-footer text-muted">

                    <?php
                    // if(isset($_SESSION['Id_client'])) {
                    ?>
                        <a href="../../includes/likedPosts.inc.php?id_posts=<?php echo $worksData['Id_Posts'] ?>">
                        <?php
                            // get liked Posts
                            $liked = new GetLikedPost();
                            $dataLiked = $liked->getLikedPost($worksData['Id_Posts']);    
                            print_r($dataLiked);                  
                        ?>
                            <h1><?php echo $dataLiked; ?></h1>
                            <h2><?php echo $worksData['Id_Posts'] ?></h2>
                            <i class="fa-regular fa-heart"></i>
                        </a>
                    <?php
                    // } else {
                    ?>
                        <i class="fa-regular fa-heart"></i>
                    <?php
                    // } // End else
                    ?>
                    </div>
                </div>
            </div>
        </div>

    <?php
      } // Ende foeEach
    } // Ende else

    ?>
</div>
<!-- </div> -->