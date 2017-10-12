<?php
require '../includes/header.php';
require '../includes/databaseConnect.php';

// start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// if the user has logged in, retrieve login, name, and role
if (isset($_SESSION['login'])AND isset($_SESSION['name']) AND isset($_SESSION['role'])) {
    $username = $_SESSION['login'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];

}

//select statement
$sql = "SELECT * FROM users WHERE username='$username'";

//execute the query
$query = $conn->query($sql);

//retrieve results
$row = $query->fetch_assoc();


//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    //include the footer
    require_once ('../includes/footer.php');
    exit;
}
?>

<h1><?php echo $name ?>'s Profile</h1>
<table>
    <tr>
    <th>Name:</th>
    <th>Username:</th>
    <th>Email:</th>
    <th>Phone:</th>
    <th>Organization:</th>
    <th>Piece Chosen:</th>
    <th>Time Checked Out:</th>
    <th>Status:</th>
    </tr>

    <tr>
        <td><?php echo $row['firstname'] . " " . $row['lastname'] ?></td>
        <td><?php echo $row['username'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['organization'] ?></td>
        <td><?php echo $row['partnumber'] ?></td>
        <td><?php echo $row['checkoutdate'] ?></td>
        <td><?php echo $row['status'] ?></td>
    </tr>
</table>

<?php
require '../includes/footer.php';

?>