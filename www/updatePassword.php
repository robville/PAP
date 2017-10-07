<?php
include ("../includes/header.php");
include ("../includes/databaseConnect.php");

$email = $_SESSION['email'];
$token = $_REQUEST['token'];

    //Save new password
    if (isset($_POST['newpassword']) && isset($_SESSION['email'])) {
        $password = $_POST['newpassword'];
        mysqli_query($conn, "UPDATE users SET password ='" . $password . "' WHERE email='" . $email . "'");
        $query = (mysqli_query($conn, "SELECT password FROM users WHERE email = '" . $email . "'"));

        while ($row = mysqli_fetch_array($query)) {
            $passVerify = $row['password'];

        }

        if ($passVerify == $password) {

            echo "Your password has been changed successfully";

        } else {
            echo "An Error Occurred, Wow that must suck huh?";
        }
    }

include ("../includes/footer.php");
?>