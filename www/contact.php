<?php
//include the header
include ('../includes/header.php');

?>


<center>
    <form action="contactSend.php" method="get" id="formStyle">
        <br><input id="firstname" name="firstname" type="text" size="55" placeholder="FIRST NAME" required>
        <br><input id="lastname" name="lastname" type="text" size="55" placeholder="LAST NAME" required>
        <br><input id="email" name="email" type="email" size="55" placeholder="EMAIL" required>
        <br><input id="phone" name="phone" placeholder="PHONE NUMBER" size="55" type="text">
        <br><textarea id="message" name="message" cols="54" rows="10" placeholder="PLEASE TYPE YOUR MESSAGE HERE..."></textarea>
        <br>
        <br><input type="submit" name="submit" value=" SUBMIT " />
        <input class="button" type="button" value=" CANCEL " onclick="contactSend();" />
<!--        <input class="button" type="button" value=" CANCEL " onclick="window.location.href = 'index.php'" />-->
    </form>
</center>



<?php
//include the footer
include ('../includes/footer.php');