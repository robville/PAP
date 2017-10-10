<?php
//include the header
include ('../includes/header.php');
include ('../includes/databaseConnect.php');

?>

    <form action="sendUsername.php" method="post">
        <input type="text" name="email" />
        <input type="submit" value="Get My Username" />
    </form>


<?php
//include the footer
include ('../includes/footer.php');

?>