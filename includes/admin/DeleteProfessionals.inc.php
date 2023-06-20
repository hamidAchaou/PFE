<?php
$Id_Professionals = $_POST['idPro'];
// echo $id;

include_once "../../classes/professionals.contr.php";

$deleteDataProfessional = new GetProfessionalsData();
$deleteProfessional = $deleteDataProfessional->deleteProfessional($Id_Professionals)

?>