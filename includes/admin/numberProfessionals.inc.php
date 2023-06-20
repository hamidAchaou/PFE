<?php
include_once "../../../classes/professionals.contr.php";

$getProfessionals = new GetProfessionalsData();
$numProfessionals = $getProfessionals->getNumprofessionals();
?>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        number of professionals</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $numProfessionals ?></div>
                </div>
                <div class="col-auto">
                    <i class="fa-solid fa-user fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once "../../../classes/works.contr.php";

$getPosts = new GetWorksData();
$numPosts = $getPosts->getNumPostsProfessionals();
// var_dump($numPosts);


?>

<!-- Number Of Posts -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        number of posts</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $numPosts; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fa-solid fa-house fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!--start calc -->
<?php
    $pubPercentage =  ((100 * $numPosts) / $numProfessionals)
?>
<!--end calc -->

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Publications percentage
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo ceil($pubPercentage) ?>%</div>
                        </div>
                        <div class="col">
                            <div class="progress progress-sm mr-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $pubPercentage ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>