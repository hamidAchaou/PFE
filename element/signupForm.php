<!-- =========================================
# form signUp
============================================== -->
<?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyinput") {
            echo '<p class="text-danger text-center msg-errore pt-2 pb-2">Please fill in all fields.</p>';
        } elseif ($_GET['error'] == "passMatch") {
            echo '<p class="text-danger text-center msg-errore pt-2 pb-2">Password is not match.</p>';
        } elseif ($_GET['error'] == "emailMatch") {
            echo '<p class="text-danger text-center msg-errore pt-2 pb-2">this email is exist please choose another email.</p>';
        } elseif ($_GET['error'] == "stmtfailed") {
            echo '<p class="text-danger text-center msg-errore pt-2 pb-2">Something went wrong. Please try again.</p>';
        }
    } elseif (isset($_GET['signUp'])) {
        if ($_GET['signUp'] == "success") {
            echo '<p class="text-success text-center msg-errore pt-2 pb-2 bg-light h4">SignUp successful.</p>';
        }
    }
    ?>
<form class="form-Signup show text-light" action="../includes/signup.inc.php" method="post">
    <h1 class="text-center mb-4">Sign Up</h1>
    <div class="form-row">
        <div class="form-group col-md-6 text-light"> 
            <label for="first-name">First Name</label> 
            <input type="text" id="first-name" name="first_name" class="form-control" required> 
        </div>
        <div class="form-group col-md-6"> 
            <label for="last-name">Last Name</label> 
            <input type="text" id="last-name" name="last_name" class="form-control" required> 
        </div>
    </div>
    <div class="form-group">
        <label for="city">City</label> 
        <select class="form-control" id="city" name="city">

        <?php
            $cities = array(
                "Casablanca",
                "Rabat",
                "Fes",
                "Marrakech",
                "Agadir",
                "Tanger",
                "Meknes",
                "Oujda",
                "Kenitra",
                "Tetouan",
                "Safi",
                "Laayoune",
                "Nador",
                "Khouribga",
                "Beni Mellal",
                "Taza",
                "Settat",
                "El Jadida",
                "Khouribga",
                "Boujniba"
            );

            foreach ($cities as $city) {
                echo "<option>$city</option>";
            }
            echo "</ul>";
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="phone-number">Phone Number</label>
        <input type="tel" id="phone-number" name="phone_number" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="date-of-birth">Date of Birth</label>
        <input type="date" id="date-of-birth" name="date_of_birth" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <select id="gender" name="gender" class="form-control" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
    <div class="form-group">
        <label for="occupation">Occupation</label>
        <input type="text" id="occupation" name="occupation" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" id="description" name="description" class="form-control">
    </div>
    <div class="form-group">
        <label for="email2">Email</label>
        <input type="email" id="email2" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password2">Password</label>
        <input type="password" id="password" name="password" class="form-control" required>
    </div>
    <div class="form-group"> <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm_password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block" id="signupSubmit" name="signupSubmit">SignUp</button>
    <p class="text-center mt-3 mb-0 a-login">
        Already registered? <a href="#" class="text-primary">LogIn</a>
    </p>
</form>