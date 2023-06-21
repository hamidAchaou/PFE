<?php
if ($_GET['addWorks'] == "success") {
    echo '<style> 
              .alert { 
                color: green; 
              } 
          </style>';
    echo '<script>alert("add works successful.")</script>';
}



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
            $postId = $worksData['Id_Posts']; // get the post ID
            // $likeBtn = "<button type='submit' name='like_post' class='btn btn-transparent'><i class='fa-regular fa-heart h3'></i></button>"; // default like button
            $numLikes = 0; // default number of likes

            // create new instance of GetLikedPost class
            $getLikedPost = new GetLikedPost();

            // get number of likes for this post
            $numLikes = $getLikedPost->getNumLikes($postId);

            // check if user is logged in
            if (isset($_SESSION['Id_client'])) {

                // check if user has already liked this post
                if ($getLikedPost->hasLikedPost($postId, $_SESSION['Id_client'])) {
                    $likeBtn = '<i class="fa-solid fa-heart text-danger h3"></i>';
                } else {
                    // $likeBtn = '<i class="fa-sharp fa-regular fa-heart text-danger h3"></i>';
                    $likeBtn = "<button type='submit' name='like_post' class='btn btn-transparent'><i class='fa-regular fa-heart h3'></i></button>"; // default like button
                }
            } else {
                // user is not logged in
                $likeBtn = '<i class="fa-sharp fa-solid fa-heart text-danger h3"></i>';
            }
    ?>

            <div class="container card-posts">
                <div class="posts d-flex justify-content-center mx-auto">
                    <div class="card">
                        <div class="card-header d-flex header-posts ">
                            <img src="../../asset/uploads/<?php echo $worksData['img_profile'] ?>" alt="">
                            <div class="info-man-posts ml-3">
                                <h4><?php echo $worksData['first_name'] . " " . $worksData['last_name'] ?></h4>
                                <h6><?php echo $worksData['occupation'] . " / " . $worksData['city'] ?></h6>
                                <div class="rating">
                                    <?php
                                    //   get num rating for Professionals
                                    include_once "../../classes/get-numRating.contr.php";
                                    $numRating = new RatingController($worksData["Id_Professionals"]);
                                    $num_ratings = $numRating->getRatingProfessionals();
                                    // var_dump($ratingProfessional);

                                    // Draw stars based on the number of ratings
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($i <= $num_ratings) {
                                            echo '<i class="fas fa-star text-warning"></i>';
                                        } else {
                                            echo '<i class="far fa-star text-dark"></i>';
                                    }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-body content-posts m-sm-4 mt-0">
                            <h2 class="title-works text-center"><?php echo $worksData['title'] ?></h2>
                            <p class="pb-3"><?php echo $worksData['description'] ?></p>
                            <img src="../../asset/uploads/<?php echo $worksData['img_posts'] ?>" alt="" srcset="">
                            <form method="post" action="../../classes/Likes-post.contr.php">
                                <input type="hidden" name="id_post" value="<?php echo $worksData['Id_Posts'] ?>">
                                <div class="card-footer text-muted text-center">
                                    <?php echo $likeBtn ?>
                                    <span class="h3"><?php echo $numLikes ?></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    <?php
        }
    }
    ?>
</div>




<?php
include "../../classes/works.contr.php";
include_once "../../classes/getLiked.contr.php";

// $worksInfo = new GetWorksData();
$dataWorksProfessionals = $worksInfo->getWorksProfessionals();

?>
<div class="posts">

    <?php
    if ($dataWorksProfessionals == null) {
        echo '<h4 class="text-center">You have not added any works yet! </h4>';
    } else {
        foreach ($dataWorksProfessionals as $worksData) {
            $postId = $worksData['Id_Posts']; // get the post ID
            $likeBtn = '<i class="fa-sharp fa-solid fa-heart text-danger h3"></i>';
            $numLikes = 0; // default number of likes

            // create new instance of GetLikedPost class
            $getLikedPost = new GetLikedPost();

            // get number of likes for this post
            $numLikes = $getLikedPost->getNumLikes($postId);

            // check if user is logged in
            if (isset($_SESSION['Id_client'])) {

                // check if user has already liked this post
                if ($getLikedPost->hasLikedPost($postId, $_SESSION['Id_client'])) {
                    $likeBtn = '<i class="fa-solid fa-heart text-danger h3"></i>';
                } else {
                    // $likeBtn = '<i class="fa-sharp fa-regular fa-heart text-danger h3"></i>';
                    $likeBtn = "<button type='submit' name='like_post' class='btn btn-transparent'>ff</button>"; // default like button
                }
            } else {
                // user is not logged in
                $likeBtn = '<i class="fa-sharp fa-solid fa-heart text-danger h3"></i>';
            }
    ?>

            <div class="container">
                <div class="posts d-flex justify-content-center mx-auto">
                    <div class="card">
                        <div class="card-header d-flex header-posts ">
                            <img src="../../asset/uploads/<?php echo $worksData['img_profile'] ?>" alt="">
                            <div class="info-man-posts ml-3">
                                <h4><?php echo $worksData['first_name'] . " " . $worksData['last_name'] ?></h4>
                                <h6><?php echo $worksData['occupation'] ?></h6>
                                <div class="rating">
                                    <?php
                                    //   get num rating for Professionals
                                    include_once "../../classes/get-numRating.contr.php";
                                    $numRating = new RatingController($worksData["Id_Professionals"]);
                                    $num_ratings = $numRating->getRatingProfessionals();
                                    // var_dump($ratingProfessional);
                                    ?>
                                    <p class="text-warning"><i class="fas fa-star"></i> <?php echo $num_ratings ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h2 class="title-works text-center"><?php echo $worksData['title'] ?></h2>
                            <img src="../../asset/uploads/<?php echo $worksData['img_works'] ?>" alt="">
                            <p class="pb-3"><?php echo $worksData['description'] ?></p>
                        </div>
                        <div class="card-footer">
                            <div class="like-section">
                                <input type="hidden" name="id_post" id="id_post" value="<?php echo $worksData['Id_Posts'] ?>">
                                <?php echo $likeBtn; ?>
                                <span class="num-likes h3"><?php echo $numLikes; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
        }
    }
    ?>
</div>

<!-- AJAX script for liking posts -->
<script>
    $(document).ready(function() {
        $(".like-btn").click(function() {
            // Get the value of the input field
            var id_post = $('#id_post').val();
            var likeBtn = $(this);
            var numLikes = $(this).next().find(".num-likes");

            console.log(id_post);

            $.ajax({
                url: "../../classes/Likes-post.contr.php",
                type: "POST",
                data: {
                    id_post: id_post
                },
                dataType: "json",
                success: function(response) {
                    numLikes.text(response.numLikes);
                    if (likeBtn.find(".fa-heart").hasClass("text-danger")) {
                        likeBtn.find(".fa-heart").removeClass("text-danger");
                    } else {
                        likeBtn.find(".fa-heart").addClass("text-danger");
                    }
                    if (response.liked) {
                        likeBtn.find(".fa-heart").addClass("text-danger");
                    } else {
                        likeBtn.find(".fa-heart").removeClass("text-danger");
                    }
                }
            });
        });
    });
</script>