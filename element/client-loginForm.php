<!-- =========================================
# form logIn
============================================== -->
<form class="form-logIn text-light" action="../includes/login.inc.php" method="post">
    <h1 class="text-center mb-4">Login</h1>
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyinput") {
            echo '<p class="text-danger text-center msg-errore pt-2 pb-2">Please fill in all fields.</p>';
        } elseif ($_GET['error'] == "usernotfoundEmail") {
            echo '<p class="text-danger text-center msg-errore pt-2 pb-2">User not found.</p>';
        } elseif ($_GET['error'] == "usernotfoundPass") {
            echo '<p class="text-danger text-center msg-errore pt-2 pb-2">Incorrect password.</p>';
        } elseif ($_GET['error'] == "stmtfailed") {
            echo '<p class="text-danger text-center msg-errore pt-2 pb-2">Something went wrong. Please try again.</p>';
        }
    } elseif (isset($_GET['login'])) {
        if ($_GET['login'] == "success") {
            echo '<p class="text-success text-center msg-errore pt-2 pb-2">Login successful.</p>';
        }
    }
    ?>
    <div class="form-group"> 
        <label for="email">Email</label> 
        <input type="email" id="emailClient" name="emailLogin" class="form-control" required> 
    </div>
    <div class="form-group"> 
        <label for="password">Password</label> 
        <input type="password" id="passwordClient" name="loginPassword" class="form-control" required> 
    </div> 
    <button type="submit" class="btn btn-primary btn-block" name="clientLoginSubmit">Login</button>
    <p class="text-center mt-3 mb-0">Not registered? 
        <a href="#" class="text-primary a-signup">Create an account</a>
    </p>
</form>