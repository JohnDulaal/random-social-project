<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = 'dulaljohn80@gmail.com';
    $subject = 'Contact Form Submission';
    $headers = 'From: ' . $email;
    $message_body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $message_body, $headers)) {
        echo '<p>Thank you for your message. We will get back to you shortly.</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
    }
}
?>
