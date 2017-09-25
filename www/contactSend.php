<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../includes/phpMailer/src/PHPMailer.php';
require '../includes/phpMailer/src/SMTP.php';
require '../includes/phpMailer/src/Exception.php';

//if(isset($_GET['submit'])){
    $to = "robville91@gmail.com"; // this is your Email address
//    $to = "tori.roessler@gmail.com"; // this is your Email address
//    $to = "zeb.wood@gmail.com"; // this is zeb's email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first'];
    $last_name = $_POST['last'];
    $last_name = $_POST['phone'];

//    $subject = "Form submission";
//    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['msg'];
//    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_GET['message'];
//
//    $headers = "From:" . $from;
//    $headers2 = "From:" . $to;
//    mail($to,$subject,$message,$headers);
//    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.


////Send mail using gmail
//if($send_using_gmail){
//    $mail->IsSMTP(); // telling the class to use SMTP
//    $mail->SMTPAuth = true; // enable SMTP authentication
//    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
//    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
//    $mail->Port = 465; // set the SMTP port for the GMAIL server
//    $mail->Username = "your-gmail-account@gmail.com"; // GMAIL username
//    $mail->Password = "your-gmail-password"; // GMAIL password
//}
//
////Typical mail data
//$mail->AddAddress($email, $name);
//$mail->SetFrom($email_from, $name_from);
//$mail->Subject = "My Subject";
//$mail->Body = "Mail contents";
//
//try{
//    $mail->Send();
//    echo "Success!";
//} catch(Exception $e){
//    //Something went bad
//    echo "Fail - " . $mail->ErrorInfo;
//}


/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */
//Import PHPMailer classes into the global namespace


//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "robville91@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "tripod91";
//Set who the message is to be sent from
$mail->setFrom($from, $first_name . " " . $last_name);
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@bhps.org', '');
//Set who the message is to be sent to
$mail->addAddress($to, " ");
//Set the subject line
$mail->Subject = 'PHP Mailer Contact Page Test';

$mail->Body = $message;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('../testImages/Screenshot 2017-09-25 05.27.15.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}else{


}