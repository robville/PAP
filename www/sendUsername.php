<?php
include ('../includes/header.php');
include ('../includes/databaseConnect.php');
//Variable to save errors
$errors = array();

if($_POST['email']){
    $email = $_POST['email'];
}

$query = mysqli_query(mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname),"SELECT username FROM users WHERE email='" . $email . "'");

while($row = mysqli_fetch_array($query)){
    $username = $row['username'];
}

if ($username != NULL )
{
    $_SESSION['username'] = $username;
}
else
{
    echo "This email address is not registered to a username.";
}

$to = $email;
$subject = "Forgot Username";
$message = '
    <html>
    <head>
    <title>Forgot Username</title>
    </head>
    <body>
    <p>The username associated with ' . $email . ' is ' . $username . '</p>

    </body>
    </html>
';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$headers .= 'From: Password Reset <noreply@domain.com>' . "\r\n";

if(mail($to,$subject,$message,$headers))
{
    echo "We have sent your username to your email: <strong>".$to."</strong>";
}

include ("../includes/footer.php");
?>


