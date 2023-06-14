<?php
session_start();
include "../classes/rating.contr.classes.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $Id_Professionals = $_POST['Id_Professionals'];
  $num_rating = $_POST['rating'];
  $Id_client = $_SESSION['Id_client']; // replace with the ID of the currently logged in client

  $evaluate = new RatingController($Id_Professionals, $Id_client, $num_rating);
  $evaluate->addRatingProfessionals();

  header("Location: ../pages/user/infoProfessionals.php");
  exit();
}
?>