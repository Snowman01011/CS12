<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "snowygot36@gmail.com"; // Replace with your email address
    $subject = "Request A Call Back";
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Sent Successfully!";
    } else {
        echo "MF put correct details!";
    }
}
?>
