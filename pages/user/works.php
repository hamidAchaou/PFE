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

    <!-- works css -->
    <link rel="stylesheet" href="../../asset/css/works.css">

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link swet alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <title>KhedmaPro</title>
</head>

<body>
    <!--=================== start navvar ================================  -->
    <?php
    session_start();
        if(isset($_SESSION['firs_name'])) {
          include "../../element/navbarProfessionals.php";        
        } else {
          include "../../element/navbar.php"; 
        }

        // success add wrks
        if (isset($_GET['addWorks'])) {
          if ($_GET['addWorks'] == "success") {
              echo "<script>
              Swal.fire(
                'success',
                'That thing is still around?',
                'question'
              )
              </script>";
          }
      }
      
    ?>
    <!--=================== end navvar ================================  -->
    <!--=================== start header ================================  -->
    <div class="works works-fluid bg-primary text-white mb-3 ">
        <div class="container">
            <h1 class="display-4">Publications for your professionals</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod ipsum et magna bibendum bibendum.</p>
        </div>
    <!-- </div> -->
    <!--=================== end header ================================  -->

    <!--=================== start posts Works ================================  -->
    <?php include "../../includes/works.inc.php" ?>
    <!--=================== start Posts Works ================================  -->



        <!-- =================== start footer ====================-->
          <?php include "../../element/footer.php" ?>
        <!--=================== End Footer ==========================-->



        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>