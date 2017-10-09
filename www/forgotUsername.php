<?php
//include the header
include ('../includes/header.php');
include ('../includes/databaseConnect.php');

?>

    <form action="sendUsername.php" method="post">
        <input type="text" name="email" />
        <input type="submit" value="Get My Username" />
        <input type="hidden" name="register" value="TRUE" />
    </form>


<?php
//include the footer
include ('../includes/footer.php');

?>