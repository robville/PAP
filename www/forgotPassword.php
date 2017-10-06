<?php
include ('../includes/header.php');
include ('../includes/databaseConnect.php');
?>


    <form action="forgotPassword2.php" method="post">
            <input type="text" name="email" />
            <input type="submit" value="Reset My Password" />
            <input type="hidden" name="register" value="TRUE" />
    </form>



<?php
//include the footer
include ('../includes/footer.php');

?>