<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = 'zacharywelten@gmail.com';

  // Set the email subject
  $subject = 'Contact Form Submission';

  // Build the email body
  $body = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Message: $message\n";

  // Set additional headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    http_response_code(200);
  } else {
    // Failed to send email
    http_response_code(500);
  }
} else {
  // Invalid request method
  http_response_code(400);
}
?>