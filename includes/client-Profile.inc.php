<?php
include "../../classes/clients.contr.classes.php";

// get id Clients
$Id_client = $_SESSION['Id_client'];

// get data clients
$ClientsInfo = new GetClientsInfo();
$dataClients = $ClientsInfo->getClientsData($Id_client);

?>


<div class="container my-profile mb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-userpic w-100 d-flex justifay-content-center">
                        <img src="../../asset//images/1.jpg" class="img-responsive" alt>
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"><?php echo $dataClients[0]['first_name'] . " " . $dataClients[0]['last_name'] ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    <h5 class="card-title mb-0">Your info</h5>
                </div>
                <div class="card-body">
                    <div>

                        <ul class="nav nav-tabs" role="tablist">
                            <li id="updateProfileTab" role="presentation" class="mr-4 border border-secondary  p-2 active text-light"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Update Profile</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active pt-3" id="home">

                                <!-- start from info Professional -->
                                <form method="post" action="../../includes/updateProfessionalInfo.inc.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <input type="hidden" name="Id_Professionals" value="<?php echo $Id_client ?>">
                                        <div class="form-group col">
                                            <label for="inputName">First Name</label>
                                            <input type="text" class="form-control" id="inputName" name="first_name" value="<?php echo $dataClients[0]['first_name'] ?>">
                                        </div>
                                        <div class="form-group col">
                                            <label for="inputLastName">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" value="<?php echo $dataClients[0]['last_name'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="inputEmail">Email address</label>
                                            <input type="email" class="form-control" id="inputEmail" name="email" value="<?php echo $dataClients[0]['email'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="inputPhone">Phone Number</label>
                                            <input type="text" class="form-control" id="inputPhone" name="phone_number" value="<?php echo $dataClients[0]['phone_number'] ?>">
                                        </div>
                                        <div class="form-group col">
                                            <label for="inputPassword">Password</label>
                                            <input type="password" class="form-control" id="inputPassword" name="password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="inputImgProfile">Profile Image</label>
                                            <input type="file" class="form-control-file" id="inputImgProfile" name="profile_image">
                                        </div>
                                        <div class="form-group col">
                                            <label for="gender">Gender:</label>
                                            <select id="gender" name="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>

                                        </div>
                                    </div>
                                    <button type="submit" name="uploadProfile" class="btn btn-primary">Update</button>
                                </form>
                                <!-- end from info Professional -->
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


