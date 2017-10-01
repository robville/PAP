<?php
require_once '../includes/databaseConnect.php';

//start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//create variable login status.
$_SESSION['login_status'] = "";
$username = $password = "";

//retrieve user name and password from the form in the login form
if (filter_has_var(INPUT_GET, 'username') || filter_has_var(INPUT_GET, 'password')) {
    $username = $conn->real_escape_string(trim(filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING)));
    $password = $conn->real_escape_string(trim(filter_input(INPUT_GET, 'password', FILTER_SANITIZE_STRING)));
}

//validate user name and password against a record in the users table in the database. If they are valid, create session variables.
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$query = @$conn->query($sql);

if ($query->num_rows) {
    // It is a valid user. Need to store the user in session variable
    $row = $query->fetch_assoc();
    $_SESSION['login'] = $username;
    $_SESSION['role'] = $row['role'];
    $_SESSION['name'] = $row['firstname'] . " " . $row['lastname'];
}


//close the connection
$conn->close();

//redirect to the user profile page
header("Location: userProfile.php");

?>