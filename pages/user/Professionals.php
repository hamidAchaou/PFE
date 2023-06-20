<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- main css -->
  <link rel="stylesheet" href="../../asset/css/main.css">

  <!-- Professionals css -->
  <link rel="stylesheet" href="../../asset/css/Professionals.css">

  <!-- font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <title>KhedmaPro</title>
</head>

<body>
  <!--=================== start navvar ================================  -->
  <?php
  session_start();
  if (isset($_SESSION['firs_name'])) {
    include "../../element/navbarProfessionals.php";
  } else {
    include "../../element/navbar.php";
  }
  ?>
  <!--=================== end navvar ================================  -->

  <!-- ======================== start header ====================== -->
  <div class="professionals jumbotron-fluid bg-primary text-white mb-3">
    <div class="container">
      <!-- <h1 class="display-4">Get to know the best <span>professionals</span></h1>
      <p class="lead">Contact the best professionals to get the best job.</p> -->
      <div class="inner-content pt-5">
        <div class="row pt-5">
          <div class="col-lg-10 offset-lg-1">
            <h1 class="display-4 font-weight-bold">Looking for the best <br><span>craftsmen</span></h1>
            <p class="font-italic mb-3">This site provides you with the best professionals for your business</p>
            <form id="subscribe" action="" method="post">
              <input type="text" name="city" id="city" placeholder="your city">
              <input type="text" name="occupation" id="occupation" placeholder="Your occupation">
              <a href="Professionals.php">
                <button type="submit" id="form-submit" class="main-button" name="btn-search">Search</button>
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==================== end header ============================= -->

  <!-- ====================== start Professionals ===========================-->   
  
  
<section id="trainers" class="trainers">

<div class="container section-title text-center">
    <h2>best professionals</h2>
    <p>get to know me best professionals</p>
</div>

<div class="pl-5 pr-5 row justify-content-center w-100 m-0" data-aos="fade-up">
<?php

    // Number of professionals to display per page
    $professionalsPerPage = 6;

    // Current page number
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

    if (isset($_POST['btn-search'])) {
        $city = $_POST['city'];
        $occupation = $_POST['occupation'];

        include_once "../../classes/professionals.contr.php";
        $searchProfessional = new GetProfessionalsData();
        $getProfessionalsBySearch = $searchProfessional->searchByCityAndOccupation($city, $occupation);

        // Pagination logic
        $totalProfessionals = count($getProfessionalsBySearch);
        $totalPages = ceil($totalProfessionals / $professionalsPerPage);
        $startIndex = ($currentPage - 1) * $professionalsPerPage;
        $displayProfessionals = array_slice($getProfessionalsBySearch, $startIndex, $professionalsPerPage);

        foreach ($displayProfessionals as $professionnal) :
?>

<!-- card Professionals -->
<div class="col-lg-4 col-md-6 col-sm-12 mb-4 card-professionals">
    <div class="card member">
        <img src="../../asset/uploads/<?php echo $professionnal["img_profile"] ?>" class="card-img-top" alt="">
        <div class="card-body member-content">
            <h3 class="card-title"><?php echo $professionnal["first_name"] . $professionnal["last_name"] ?></h3>
            <p class="card-text"><?php echo $professionnal["occupation"] . " | " .  $professionnal["phone_number"] ?></p>
            <p><?php echo $professionnal["description"] ?></p>
            <div class="social">
                <a href="infoProfessionals.php?Id_Professionals=<?php echo $professionnal["Id_Professionals"] ?>"
                    type="button" class="btn btn-primary">Profile</a>
            </div>
        </div>
    </div>
</div>

<?php
    endforeach;
?>

<!-- Pagination -->
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <?php
            for ($page = 1; $page <= $totalPages; $page++) {
                $active = $page == $currentPage ? 'active' : '';
                echo '<li class="page-item ' . $active . '"><a class="page-link" href="?page=' . $page . '">' . $page . '</a></li>';
            }
        ?>
    </ul>
</nav>
<?php
 }else {

      // get data Professionals
      include "../../includes/professionals.inc.php";

    }
  
  ?>
</div>
</section>

  <!-- ====================== end Professionals ===========================-->


  <!-- =================== start footer ====================-->
  <?php include "../../element/footer.php" ?>
  <!--=================== End Footer ==========================-->



  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <!-- js -->
  <script src="../asset/JavaScript/Professionals.js"></script>

</body>

</html>