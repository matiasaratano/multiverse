<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'your-email@example.com'; // Replace with your email address
$subject = 'New form submission';
$body = "Name: $name\nEmail: $email\nMessage:\n$message";

// Send email
mail($to, $subject, $body);

// Redirect to a thank-you page
header('Location: thank-you.html');
exit;
?>