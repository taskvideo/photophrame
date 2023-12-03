<?php
$mail_to = "info@francocionini.it";
$mail_from = "postmaster@francocionini.it";

$name = strip_tags(trim($_POST['name']));
$email = strip_tags(trim($_POST['email']));
$subject = strip_tags(trim($_POST['subject']));
if ($subject != '') {
    $mail_subject = $subject;
} else {
    $mail_subject = 'Contact form of website';
}
$text = strip_tags(trim($_POST['message']));

$message = "<h3>CONTACT FORM WAS SUBMITTED</h3>" . "<br>";
$message .= "<b>Name:</b> " . $name . "<br>";
$message .= "<b>Email:</b> " . $email . "<br>";
$message .= "<b>Message:</b> " . $text . "<br>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: <" . $mail_from . ">" . "\r\n";

// Additional headers for improved email delivery
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

// Send email
$mail_success = mail($mail_to, $mail_subject, $message, $headers);

// Check if the email was sent successfully
if ($mail_success) {
    echo "Email sent successfully!";
} else {
    echo "Error sending email. Please try again later.";
}
?>
