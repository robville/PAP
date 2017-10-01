<?php
include '../includes/header.php';
require '../includes/databaseConnect.php';



?>

<form action="" method="post">
    <p>Your Email: <input type="text" name="email" size="50" maxlength="255">
        <input type="submit" name="submit" value="Get New Password"></p>
</form>

<?php
include '../includes/footer.php';
?>