<!-- =========================================
# form logIn
============================================== -->
<form class="form-logIn" action="includes/login.inc.php" method="post">
    <h1 class="text-center mb-4">Login</h1>
    <div class="form-group"> <label for="email">Email</label> <input type="email" id="email" name="email" class="form-control" required> </div>
    <div class="form-group"> <label for="password">Password</label> <input type="password" id="password" name="password" class="form-control" required> </div> <button type="submit" class="btn btn-primary btn-block">Login</button>
    <p class="text-center mt-3 mb-0">Not registered? <a href="#" class="text-primary a-signup">Create an
            account</a></p>
</form>