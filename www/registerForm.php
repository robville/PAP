<?php
//include the header
include ('../includes/header.php');

?>

<center>
    <form action="" method="post" id="formStyle">
        <br><input name="firstname" type="text" size="55" placeholder="FIRST NAME" required>
        <br><input name="lastname" type="text" size="55" placeholder="LAST NAME" required>
        <br><input name="username" type="text" size="55" placeholder="USERNAME" required>
        <br><input name="password" type="password" size="55" placeholder="PASSWORD" required>
        <br><input name="email" type="email" size="55" placeholder="EMAIL" required>
        <br><input name="phone" placeholder="PHONE NUMBER" size="55" type="text">
        <br><input name="organization" type="text" size="55" placeholder="ORGANIZATION" required>
        <br>
        <br><input type="submit" value=" REGISTER " />
        <input class="button" type="button" value=" CANCEL " onclick="window.location.href = 'index.php'" />
    </form>
</center>

<?php
//include the footer
include ('../includes/footer.php');