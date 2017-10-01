<?php
//include the header
include ('../includes/header.php');

//check the login status
$login_status = '';
if (isset($_SESSION['login_status'])) {
    $login_status = $_SESSION['login_status'];
}

// the user's last login attempt succeeded
if ($login_status == 1) {
    echo "<p> You are logged in as " . $_SESSION['login'] . ".</p>";
    echo "<a href='logout.php'>Log out</a><br/>";
    include ('../includes/footer.php');
    exit();
}

//the user has just registered
if ($login_status == 3) {
    //redirect to the index page
    header("Location: index.php");
}

// the user's last login attempt failed
if ($login_status == 2) {
    $message = "Username or password is invalid. Please try again.";
}

?>

<center>
    <form method='get' action='login.php' id="formStyle">
        <?php echo $message; ?>
        <br>
        <br><input type='text' name='username' size='55' placeholder="USERNAME" required>
        <br><input type='password' name='password' size='55' placeholder="PASSWORD" required>
        <br><input type='submit' value='  LOGIN  '>
        <input class="button" type="submit" name="Cancel" value=" CANCEL " onclick="window.location.href = 'loginform.php'" />
    </form>
    <br>If you don't have an account with us,
    <br>please <a href='registerForm.php'>REGISTER</a>
    <br>
    <br>
    <br><a href="forgotPassword.php">FORGOT PASSWORD?</a>
</center>

<?php
//include the footer
include ('../includes/footer.php');

?>