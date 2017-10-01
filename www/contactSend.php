<?php

if(isset($_POST)){
    $to="tori.roessler@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $phone = $_POST['phone'];
    $subject = "Form Submission";
    $subject2 = "Copy of Your Form Submission";
    $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'] . " They can be reached at " . $from . "or " . $phone;
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
}

header ('Location: thankYou.php');