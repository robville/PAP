<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION['login'] = $username;
$_SESSION['name'] = $firstname . " " . $lastname;
$_SESSION['role'] = 2;
$_SESSION['login_status'] = 3;

//retrieve user inputs from the form
if (!filter_has_var(INPUT + POST, 'firstname') ||
    !filter_has_var(INPUT + POST, 'lastname') ||
    !filter_has_var(INPUT + POST, 'username') ||
    !filter_has_var(INPUT + POST, 'password') ||
    !filter_has_var(INPUT + POST, 'email') ||
    !filter_has_var(INPUT + POST, 'phone') ||
    !filter_has_var(INPUT + POST, 'organization'))
{
    $error = "The service is currently unavailable. Please try again later.";
    header("Location: error.php?m=$error");
    die();
}

//include code from header.php and database.php
require_once('../includes/databaseConnect.php');

$firstname = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING)));
$lastname = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING)));
$username = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING)));
$password = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)));
$email = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)));
$phone = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING)));
$organization = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'organization', FILTER_SANITIZE_STRING)));

$role = 2;  //regular user
//start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}



//insert statement. The id field is an auto field.
$sql = "INSERT INTO users  (firstname, lastname, username, password, email, phone, organization, role) VALUES ('$firstname', '$lastname', '$username', '$password', '$email', '$phone', '$organization', '$role')";


//execute the insert query
$query = @$conn->query($sql);

//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $error = $conn->error;
    $error = "Insertion failed with: ($errno) $error.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}else{
    //redirect to the index page
    header("Location: loginForm.php");
}

$conn->close();



?>