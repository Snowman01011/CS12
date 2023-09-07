<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    $to = "snowygot36@gmail.com"; // Replace with your email address
    $subject = "New Subscriber";
    $body = "Email: $email";

    if (mail($to, $subject, $body)) {
        echo "You'll get Notified on Updates!";
    } else {
        echo "enter correct mail address!";
    }
}
?>