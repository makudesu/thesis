<?php

/*
 * Script for sending E-Mail messages.
 * 
 * Note: Please edit $sendTo variable to your email address and $subject variable to desired subject for all E-Mails.
 * 
 */

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

$sendTo = "your_email@domain.com";
$subject = "Message from website by " . $name;

if (($name != "") && ($email != "") && ($message != "")) {
    if (mail($sendTo, $subject, $message, $headers)) {
        echo "Message sent succesfully.";
    } else {
        echo "There was problem while sending E-Mail.";
    }
}
?>
