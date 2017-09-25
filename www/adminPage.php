<?php
//include the header
include ('../includes/header.php');
require_once '../includes/databaseConnect.php';

$sql = "SELECT * from users";
$query = $conn->query($sql);


//Handle selection errors
if (!$query) {
    $errno = $conn->errno;
    $errmsg = $conn->error;
    echo "Selection failed with: ($errno) $errmsg<br/>\n";
    $conn->close();
    require_once ('../includes/footer.php');
    exit;
}

?>

    <br>
    <br>
    <br>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Organization</th>
                <th>Part #</th>
                <th>Check Out Date</th>
                <th>Status</th>
            </tr>

            <?php
            //create a while loop here to insert one row for each user.
            while (($row = $query->fetch_assoc()) !== NULL) {
                echo "<tr>";
                echo "<td>", $row['id'], "</td>";
                echo "<td>", $row['firstname'], "</td>";
                echo "<td>", $row['lastname'], "</td>";
                echo "<td>", $row['username'], "</td>";
                echo "<td>", $row['email'], "</td>";
                echo "<td>", $row['phone'], "</td>";
                echo "<td>", $row['organization'], "</td>";
                echo "<td>", $row['partnumber'], "</td>";
                echo "<td>", $row['checkoutdate'], "</td>";
                echo "<td>", $row['status'], "</td>";
                echo "</tr>";
            }
            ?>
        </table>

</div>



<?php
//include the footer
include ('../includes/footer.php');