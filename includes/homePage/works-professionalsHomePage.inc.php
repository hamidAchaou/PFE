<?php
include '../../classes/works.contr.php';

$worksInfo = new GetWorksData();
$dataWorksProfessionals = $worksInfo->getWorksProfessionalsRand();
?>


<!--===================== start works   =================================-->
<section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

        <div class="section-title text-center">
            <h2>Some of the work of professionals</h2>
            <p>Discover some of our professionals' work</p>
        </div>

        <div class="row pt-4 data-aos=" zoom-in" data-aos-delay="100">


            <?php
            foreach ($dataWorksProfessionals as $worksData) {
            ?>


                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 card-professionals">
                    <div class="course-item text-center">
                        <img src="../../asset/uploads/<?php  echo $worksData[0]["img_posts"] ?>" class="img-fluid img-work" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4><?php echo $worksData['occupation'] ?></h4>
                                <p class="price"><?php echo $worksData['date_created'] ?></p>
                            </div>

                            <h3><a href="course-details.html"><?php echo $worksData['title'] ?></a></h3>
                            <p><?php echo $worksData['description'] ?></p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="../../asset/uploads/<?php echo $worksData['img_profile'] ?>" class="img-fluid" alt="">
                                    <span><?php echo $worksData['first_name'] . " " . $worksData['last_name'] ?></span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="fa-solid fa-heart"></i>&nbsp;35
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

            <?php
            }
            ?>
        </div>

    </div>
</section>
<!--===================== End Works =====================-->