<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    
    <!-- main css -->
    <link rel="stylesheet" href="../../asset/css/main.css">
    
    <!-- profile css -->
    <link rel="stylesheet" href="../../asset/css/profile.css">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    ?>
  <!--=================== end navvar ================================  -->

  <!--=================== start profile ================================  -->
    <?php include "../../includes/professionalWorks.inc.php" ?>
  <!--=================== end navvar ================================  -->

    <!--=================== start navvar ================================  -->
    <?php include "../../element/footer.php" ?>
  <!--=================== end navvar ================================  -->

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>

</html>