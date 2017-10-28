<?php
include "../includes/header.php";
include "../includes/databaseConnect.php";

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// if the user has logged in, retrieve login, name, and role
if (isset($_SESSION['login'])AND isset($_SESSION['name']) AND isset($_SESSION['role'])) {
    $login = $_SESSION['login'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
}

$login = $_SESSION['login'];

$testString = "1234567";

//INSERT CHOSEN PART NUMBER INTO DATABASE
mysqli_query($conn, "UPDATE users SET partnumber ='" . $testString . "' WHERE username='" . $login . "'");

//UPDATE CHECKED OUT STATUS
mysqli_query($conn, "UPDATE parts SET checkedOut =1 WHERE partnumber='" . $testString . "'");


$conn->close();


include "../includes/footer.php";
?>