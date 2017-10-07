<?php
include ('../includes/header.php');
include ('../includes/databaseConnect.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$token = $_REQUEST['token'];
$email = $_SESSION['email'];

    if($token - time() < 3600 ){
        echo '<form action="updatePassword.php" method="post">';
        echo 'New Password: ';
        echo '<input type="password" name="newpassword" id="password"/>';
        echo '<input type="submit" value="Change Password">';
        echo '<input type="hidden" name="reset" value="TRUE" />';
        echo '<input type="hidden" name="token" value="<?php echo $_REQUEST[\'token\']; ?>" />';
        echo '<input type="hidden" name="email" value="<?php echo $_REQUEST[\'email\']; ?>" />';
        echo '</form>';

    }else{
        echo 'Your request has timed out. Please go back to <a href="www.toriroessler.com/PAP/www/forgotPassword.php">Forgot Password</a> and resend the email.';
    }

    $emailQuery = mysqli_query(mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname), "SELECT email FROM tokens WHERE token='" . $token . "'");
    $query = mysqli_query(mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname),"UPDATE tokens SET used=1 WHERE token='" . $token . "'");

    while($row = mysqli_fetch_array($emailQuery)){
        $email = $row['email'];
    }

    if ($email != NULL )
    {
        $_SESSION['email'] = $email;
    }
    else
    {
        echo "Invalid link or Password already changed";
    }

//include the footer
include ('../includes/footer.php');

?>
