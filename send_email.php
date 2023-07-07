<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'tall.dome.kt@gmail.com';
  $subject = 'Contact Form Submission';
  $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";

  // Send the email
  if (mail($to, $subject, $body)) {
    echo 'Email sent successfully!';
  } else {
    echo 'An error occurred. Please try again later.';
  }
}
?>