<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'zacharywelten@gmail.com';
  $subject = 'Request From website';
  $body = "Name: $name\nEmail: $email\n\n$message";

  // Send email
  if (mail($to, $subject, $body)) {
    echo 'Thank you for your submission.';
  } else {
    echo 'Sorry, there was a problem sending your message.';
  }
}
?>