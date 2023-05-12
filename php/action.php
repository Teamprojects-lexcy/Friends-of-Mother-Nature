<?php
// Get the form fields and remove whitespace
$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$message = trim($_POST["message"]);

// Set the recipient email address
$to = "fmncbo2016@gmail.com";

// Set the email subject
$subject = "New message from website";

// Build the email content
$body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

// Send the email
mail($to, $subject, $body);

// Redirect to thank you page
header("Location: thank-you.html");
?>
