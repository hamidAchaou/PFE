<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- main css -->
    <link rel="stylesheet" href="../../asset/css/main.css">

    <!-- login signup css -->
    <link rel="stylesheet" href="../asset/css/loginSignup.css">

    <!-- font awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <title>KhedmaPro</title>
</head>

<body>

    <main class="w-100" id="main-login">
        <div class="d-flex log container mt-5">
            <!-- Comment Form Start -->
            <div class="rounded p-5 w-50" id="header-login">
            </div>
            <!-- form sign up -->
            <div class="rounded p-5 w-75 signupForm" id="form-login">
                <div class="d-flex justify-content-center mb-5 gap-3">
                    <button class="btn btn-primary btn-login text-light mr-2">Log In</button>
                    <button class="btn btn-signup btn-secondary text-light">Sign Up</button>
                </div>
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <!-- <h3 class="mb-0">Leave A Comment</h3> -->
                </div>

                <!-- ================== start get form signup ================== -->
                <?php include "../element/signupForm.php" ?>
                <!-- ================== end get form signup ================== -->

                <!-- ================== start get form signup ================== -->
                <?php include "../element/loginForm.php" ?>
                <!-- ================== end get form signup ================== -->


            </div>
        </div>
    </main>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Template Javascript -->
    <script src="../asset/javascript/loginSignup.js"></script>

    <!-- signupForm -->
    <!-- <script src="../asset//javascript/signupForm.js"></script> -->
</body>

</html>