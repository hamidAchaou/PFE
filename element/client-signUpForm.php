<!-- =========================================
# form signUp
============================================== -->
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
        <label for="gender">Gender</label>
        <select id="gender" name="gender" class="form-control" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
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
    <button type="submit" class="btn btn-primary btn-block" id="signupClient" name="signupClient">SignUp</button>
    <p class="text-center mt-3 mb-0 a-login">
        Already registered? <a href="../element/client-loginForm.php" class="text-primary">LogIn</a>
    </p>
</form>