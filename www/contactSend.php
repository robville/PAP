<?php

if(isset($_GET['submit'])){
    $to = "tori.roessler@gmail.com"; // this is your Email address
    $from = $_GET['email']; // this is the sender's Email address
    $first_name = $_GET['firstname'];
    $last_name = $_GET['lastname'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_GET['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_GET['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

    //redirect to the thank you page
    header("Location: thankYou.php");
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
}