<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "zacharywelten@gmail.com"; // Replace with your Gmail address
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\n\n$message";
  $headers = "From: $email";
  
  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email. Please try again.";
  }
}
?