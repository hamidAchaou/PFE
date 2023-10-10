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

  <!-- main css -->
  <link rel="stylesheet" href="../../asset/css/homePage.css">

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
  <div class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
      <div id="subscribe" class="subscribe">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="inner-content">
                <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                    <h1 class="display-4 font-weight-bold">Looking for the best <br><span>craftsmen</span></h1>
                    <p class="font-italic mb-5">This site provides you with the best professionals for your business</p>
                    <div id="subscribe">
                      <a href="Professionals.php">
                        <button type="submit" id="form-submit" class="main-button" name="btn-search">Search</button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
  <!-- ==================== end header ============================= -->

  <!-- ====================== start get Professionals ===========================-->
  <?php include "../../includes/homePage/professionalsHomePage.inc.php" ?>
  <!-- ====================== end get Professionals ===========================-->

  <!--===================== start get works   =================================-->
  <?php include "../../includes/homePage/works-professionalsHomePage.inc.php" ?>
  <!--===================== End get Works =====================-->

  <!--===================== start get contact =================== -->
  <?php include "../../element/homePages/contactHomePage.php" ?>
  <!-- ==================== end get contact ===================== -->

  <!-- =================== start get footer ====================-->
  <?php include "../../element/footer.php" ?>
  <!--=================== End get Footer ==========================-->

  <!-- link js -->
  <script src="../asset/JavaScript/homePage.js"></script>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>