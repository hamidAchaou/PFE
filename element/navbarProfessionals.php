  <!--=================== start navvar ================================  -->

  <?php
  include_once "../../classes/professionals.contr.php"; // declaration classes contr Professionals
  // include_once "../../classes/clients.contr.classes.php";


  // $Id_Professionals = ; // get id professional
  // get professionals info 
  ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
      <img src="../../asset//images/Logo.png" alt="Logo">
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
        <div class="form-inline my-2 my-lg-0">
          <div class="collapse navbar-collapse" id="navbar-list-4">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                  <!-- get img profile professionals -->
                  <?php
                    if(isset($_SESSION['Id_Professionals'])) {
                      $infoProfessional = new GetProfessionalsData();
                      $infoOneProfessional = $infoProfessional->oneProfessionalsData($_SESSION['Id_Professionals']);
                      if(isset($infoOneProfessional[0]['img_profile'])) {
                      ?>
                        <img src="../../asset//uploads/<?php echo $infoOneProfessional[0]['img_profile'] ?>" width="40" height="40" class="rounded-circle">
                    <?php
                      } else {
                        ?>
                          <img src="../../asset//images/1.jpg" width="40" height="40" class="rounded-circle">
                        <?php
                          }
                        ?>
                  <?php  
                    } else {
                  ?>
                    <img src="../../asset//images/1.jpg" width="40" height="40" class="rounded-circle">
                  <?php
                    }
                  ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                  <?php
                  if (isset($_SESSION['Id_Professionals'])) {
                  ?>
                  <a class="dropdown-item" href="../user/profile.php">Profile</a>
                  <?php
                  } elseif(isset($_SESSION['Id_client'])) {
                  ?>
                    <a class="dropdown-item" href="../client/client-profile.php">Profile</a>
                  <?php
                  }
                  ?>

                  <a class="dropdown-item" href="../../includes/logout.inc.php">Log Out</a>
                </div>
              </li>
            </ul>
          </div>
          <?php
          if (isset($_SESSION['Id_Professionals'])) {
          ?>
            <button class="btn btn-addWorks my-2 my-sm-0" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">Add Works</button>
          <?php
          }
          ?>


        </div>

      </div>
    </div>
  </nav>
  <!--=================== end navvar ================================  -->

  <!--==================================
    # modal add works 
  =======================================-->
  <!-- Modal -->
  <div class="modal fade bd-example-modal-lg modal-addPosts" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="container">
          <div class="row">
            <div class="col-md-4 hed-addWork"></div>
            <div class="col-md-8">
              <h2 class="text-center pt-4">Add your works new</h2>
              <form class="p-3" action="../../includes/addPosts.inc.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="Id_Professionals" value="<?php echo $_SESSION['Id_Professionals'] ?>">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                  <label for="description">Description For This Works</label>
                  <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>
                <div class="form-group">
                  <label for="occupation">Occupation for this Works</label>
                  <input type="text" class="form-control-file" id="occupation" name="occupation">
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control-file" id="image" name="imageWorks">
                </div>
                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary" name="submitAddWorks">Add Works</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>