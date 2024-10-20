<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Validate the form fields
    if (empty($name) || empty($email) || empty($message)) {
        die("Please fill in all fields.");
    }

    // Set the recipient email address
    $to = "husukaleanike@gmail.com"; // Replace with your email address

    // Set the email subject
    $subject = "New message from $name";

    // Set the email body
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Set the email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    die("Invalid request method.");
}
?>
