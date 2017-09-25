<?php



?>

<!-- begin HTML -->
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">

<!-- begin head -->
<head>
    <title>Print a President</title>
    <!--  link scripts (asynchronous)  -->

    <script src="../bower_components/jquery/dist/jquery.min.js" async></script>
    <script src="../bower_components/sweetalert2/dist/sweetalert2.min.js" async></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js" async></script>
    <script src="../js/main.js" async></script>

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
                        echo "<a href=''>LOGOUT</a>";
                }
                ?>

            </div>
            <!-- navigation end -->
        </nav>
        <!-- wrapper div to hold navigation end -->
    </div>
