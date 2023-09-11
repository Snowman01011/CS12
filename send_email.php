<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "snowygot36@gmail.com";
  $subject = "Contact Form Submission";
  $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";

  mail($to, $subject, $body);

  // Redirect back to your website after submission
  header("Location: index.html");
}
?>