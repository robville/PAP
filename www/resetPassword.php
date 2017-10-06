<?php
include ('../includes/header.php');
include ('../includes/databaseConnect.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// if the user has logged in, retrieve login, name, and role
if (isset($_SESSION['login'])AND isset($_SESSION['name']) AND isset($_SESSION['role'])) {
    $login = $_SESSION['login'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
}

$token = $_REQUEST['token'];

if($_POST['email']){
    $email = $_POST['email'];
}

if(!isset($_POST['newpassword']))
{
    $query = "SELECT email FROM tokens WHERE token='" . $token . "' AND used = 0";
    $result = mysqli_query($query);
    while($row = mysqli_fetch_array($result))
    {
        $email = $row['email'];
    }


    if ($email != '')
    {
        $_SESSION['email'] = $email;
    }
    else
    {
        echo "Invalid link or Password already changed";
    }
}

//Save new password
if(isset($_POST['newpassword']) && isset($_SESSION['email']))
{
    $query = "UPDATE users SET password ='$password' WHERE email='" . $email . "'";
    $result = mysqli_query($query);
    if($result)
    {
        mysqli_query("UPDATE tokens SET used=1 WHERE token='" . $token . "'");
    }
    echo "Your password has been changed successfully";
    if(!$result)
    {
        echo "An error occurred. Please try the again or contact us at admin@domain.com";
    }
}

?>



    <table align="center" style="padding-bottom:40px;">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <tr>
                <td>New Password:</td>
                <td><input type="password" name="newpassword" id="password"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Change Password"></td></tr>
            <input type="hidden" name="reset" value="TRUE" />
            <input type="hidden" name="token" value="<?php echo $_REQUEST['token']; ?>" />
        </form>
    </table>

<?php
//include the footer
include ('../includes/footer.php');

?>