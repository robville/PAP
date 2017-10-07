<?php
//include the header
include ('../includes/header.php');
include ('../includes/databaseConnect.php');

$message = "Please enter your information to register.";
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

// the user's last login attempt failed
if ($login_status == 2) {
    $message = "Username or password is invalid. Please try again.";
}
?>

<center>
    <form action="register.php" method="POST" id="formStyle">
        <br><input name="firstname" type="text" size="55" placeholder="FIRST NAME" required>
        <br><input name="lastname" type="text" size="55" placeholder="LAST NAME" required>
        <br><input name="username" type="text" size="55" placeholder="USERNAME" required>
        <br><input name="password" type="password" size="55" placeholder="PASSWORD" required>
        <br><input name="email" type="email" size="55" placeholder="EMAIL" required>
        <br><input name="phone" placeholder="PHONE NUMBER" size="55" type="text">
        <br><input name="organization" type="text" size="55" placeholder="ORGANIZATION" required>
        <br>
        <br><input type="submit" value=" REGISTER " />
        <input class="button" type="button" value=" CANCEL " onclick="window.location.href = 'index.php'" />
    </form>
</center>

<?php
//include the footer
include ('../includes/footer.php');

?>