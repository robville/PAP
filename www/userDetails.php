<?php
//include the header
include ('../includes/header.php');
require_once '../includes/databaseConnect.php';

$id = $_REQUEST['id'];

$sql = "SELECT * from users WHERE id='$id'";

//execute the query
$query = $conn->query($sql);

//retrieve the results
$row = $query->fetch_assoc();


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
                <form name="editUserDetails" action="updateUserDetails.php" method="POST">
                    <table>
                        <tr>
                            <th>ID</th>
                            <td><input name="id" value="<?php echo $row['id'] ?>" readonly></td>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td><?php echo $row['firstname'] . " " . $row['lastname'] ?></td>
                        </tr>

                        <tr>
                            <th>Username</th>
                            <td><?php echo $row['username'] ?></td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td><?php echo $row['email'] ?></td>
                        </tr>

                        <tr>
                            <th>Phone</th>
                            <td><?php echo $row['phone'] ?></td>
                        </tr>

                        <tr>
                            <th>Organization</th>
                            <td><?php echo $row['organization'] ?></td>
                        </tr>

                        <tr>
                            <th>Piece Chosen</th>
                            <td><input name="partnumber" value="<?php echo $row['partnumber'] ?>" required /></td>
                        </tr>

                        <tr>
                            <th>Checkout Date</th>
                            <td><input name="checkoutdate" value="<?php echo $row['checkoutdate'] ?>" required /></td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td><input name="status" value="<?php echo $row['status'] ?>" required /></td>
                        </tr>
                    </table>
                    <input type="submit" value=" SUBMIT " />
                </form>


    </div>



<?php
//include the footer
include ('../includes/footer.php');
?>