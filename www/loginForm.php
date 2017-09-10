<?php
//include the header
include ('../includes/header.php');

?>

<center>
    <form method='post' action='' id="formStyle">
        <?php echo $message; ?>
        <br>
        <br><input type='text' name='username' size='55' placeholder="USERNAME" required>
        <br><input type='password' name='password' size='55' placeholder="PASSWORD" required>
        <br><input type='submit' value='  LOGIN  '>
        <input class="button" type="submit" name="Cancel" value=" CANCEL " onclick="window.location.href = 'loginform.php'" />
    </form>
    <br>If you don't have an account with us,
    <br>please <a href='registerForm.php'>REGISTER</a>.
</center>

<?php
//include the footer
include ('../includes/footer.php');