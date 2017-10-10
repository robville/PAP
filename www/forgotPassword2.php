<?php
include ('../includes/header.php');
include ('../includes/databaseConnect.php');
//Variable to save errors
$errors = array();

if($_POST['email']){
    $email = $_POST['email'];
}

//insert statement. The id field is an auto field.
$sql = "SELECT email FROM users WHERE email='$email'";

//execute the insert query
$query = @$conn->query($sql);

$token = time();
$sql = "INSERT INTO tokens (token, email) VALUES ('$token','$email')";
//execute the insert query
$query = @$conn->query($sql);

//Send the reset link to the user
function mailresetlink($to,$token){
    $subject = "Password Reset";
    $message = '
    <html>
    <head>
    <title>Password Reset</title>
    </head>
    <body>
    <p>Click on the given link to reset your password <a href="http://www.toriroessler.com/PAP/www/resetPassword.php?token='.$token.'">Reset Password</a></p>

    </body>
    </html>
';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: Password Reset <noreply@domain.com>' . "\r\n";

if(mail($to,$subject,$message,$headers))
{
echo "We have sent the password reset link to your email at <strong>".$to."</strong>";
}
}

//If email is posted, send the email
if(isset($_POST['email']))
{
mailresetlink($email,$token);
}

?>




<?php
//include the footer
include ('../includes/footer.php');

?>