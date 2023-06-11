<?php
if(isset($_POST['btn-search'])) {
    $city = $_POST['city'];
    $occupation = $_POST['occupation'];

    include_once "../classes/professionals.contr.php";

    $searchProfessional = new GetProfessionalsData();
    $getProfessionalsBySearch = $searchProfessional->searchByCityAndOccupation($city, $occupation);
    print_r($getProfessionalsBySearch);
 
    foreach ($getProfessionalsBySearch as $professionnal) :
  ?>

      <!-- card Professionals -->
      <div class="col-lg-4 col-md-6 col-sm-12 mb-4 card-professionals">
          <div class="card member">
              <img src="../../asset/uploas/<?php echo $professionnal["img_profile"] ?>" class="card-img-top" alt="">
              <div class="card-body member-content">
                  <h3 class="card-title"><?php echo $professionnal["first_name"] . $professionnal["last_name"] ?></h3>
                  <p class="card-text"><?php echo $professionnal["occupation"] ?></p>
                  <p><?php echo $professionnal["description"] ?></p>
                  <div class="social">
                  <a href="infoProfessionals.php?Id_Professionals=<?php echo $professionnal["Id_Professionals"] ?>" type="button" class="btn btn-primary">Profile</a>
                  </div>
              </div>
          </div>
      </div>
              
      
  <?php
    endforeach;
}
?>