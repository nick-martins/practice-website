<?php
$to = "nickmartins202@gmail.com"; 
$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['message'];

$headers = "From: " .  $email;
$headers .= "Reply-To: $visitor_email \r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";


if(isset($_POST['submit'])){
    $subject  = "New email from your website";

    $body   = "Name: " . $name;
    $body  .= "Email: " . $email;
    $body  .= "Message: " . $message;

if ($_POST['submit']) {
	if (mail($to, $subject, $body, $headers)) {
		echo '<p>Your message has been sent!</p>';
	} else {
		echo '<p>Something went wrong, go back and try again!</p>';
	}
}
?>