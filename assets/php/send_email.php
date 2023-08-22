<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Replace the following lines with your email sending code/library
    $to = 'your_gmail_account@gmail.com'; // Replace this with your Gmail address
    $subject = 'New message from ' . $name;
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        // Email sent successfully
        echo 'Email sent';
    } else {
        // Error sending email
        echo 'Failed to send email';
    }
}
?>
