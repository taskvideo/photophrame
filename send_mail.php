<?php
$mail_to = "info@francocionini.it";
$mail_from = "postmaster@francocionini.it"; // Set this to the email address you want to appear as the sender

// Other email configuration settings
$imap_server = "imaps.aruba.it";
$imap_port = 993;
$smtp_server = "smtps.aruba.it";
$smtp_port = 465;

// Your existing email content and headers
$name = strip_tags(trim($_POST['name']));
$email = strip_tags(trim($_POST['email']));
$subject = strip_tags(trim($_POST['subject']));
if($subject!='') $mail_subject = $subject;
else $mail_subject = 'Contact form of website';
$text = strip_tags(trim($_POST['message']));

$message = "<h3>CONTACT FORM WAS SUBMITTED</h3>"."<br>";
$message .= "<b>Name:</b> ".$name."<br>";
$message .= "<b>Email:</b> ".$email."<br>";
$message .= "<b>Message:</b> ".$text."<br>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$mail_from.">" . "\r\n";

mail($mail_to,$mail_subject,$message,$headers);
?>



