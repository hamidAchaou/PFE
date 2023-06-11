    <?php include_once "../../classes/professionals.contr.php"; // declaration classes contr Professionals ?>
    <!--=================== start navvar ================================  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="../user/homePage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../user/works.php">Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../user/Professionals.php">Professionals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../user/contact.php">Contact</a>
            </li>
          </ul>
            <div class="dropdown form-inline my-2 my-lg-0">
            <a class="btn btn-secondary dropdown-toggle btn-login text-center" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              LogIn
            </a>


              <div class="dropdown-menu">
                <a href="../loginSignUp.php" class="btn my-2 my-sm-0">Professional</a>
                <a href="../client-logInSignUp.php" class="btn my-2 my-sm-0">Client</a>
              </div>
            </div>

        </div>
      </div>
    </nav>
    <!--=================== end navvar ================================  -->