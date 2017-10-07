<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// if the user has logged in, retrieve login, name, and role
if (isset($_SESSION['login'])AND isset($_SESSION['name']) AND isset($_SESSION['role'])) {
    $login = $_SESSION['login'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
}


?>

<!-- begin HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<!-- begin head -->
<head>
    <title>Print a President</title>
    <!-- link stylesheet -->
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <!-- end head -->
</head>

<!-- begin body -->
<body>

    <!-- wrapper div to hold navigation begin -->
    <div id="nav-div">
<!-- navigation begin -->
        <nav>
            <!-- left side of navigation -->
            <div id="nav-left">
                LOGO GOES HERE!!!
                <a href="../www/index.php">HOME</a>
                <a href="../www/about.php">ABOUT</a>
                <a href="../www/contact.php">CONTACT</a>
            </div>

            <!-- right side of navigation -->
            <div id="nav-right">
                <!-- show login if login is empty -->
                <?php
                    if(empty($login)) {
                        echo "<a href='../www/loginForm.php'>LOGIN</a>";
                    }else{ //if logged in, show logout and profile
                        echo "<a href='../www/userProfile.php'>PROFILE</a>";
                        echo "<a href='../www/logout.php'>LOGOUT</a>";
                }
                if ($role == 1) {
                    echo "<a href='../www/adminPage.php'>ADMIN PAGE</a>";
                }
                ?>

            </div>
            <!-- navigation end -->
        </nav>
        <!-- wrapper div to hold navigation end -->
    </div>
