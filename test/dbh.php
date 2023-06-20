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
            $postId = $worksData['Id_Posts']; // get the post ID
            $likeBtn = "<button type='submit' name='like_post' class='btn btn-transparent'><i class='fa-regular fa-heart h3'></i></button>"; // default like button
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