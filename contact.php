<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    // Set up email parameters
    $to = 'your_email@example.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Send the email
    $success = mail($to, $subject, $email_message, $headers);

    // Check if the email was sent successfully
    if ($success) {
        echo 'Thank you for contacting me!';
    } else {
        echo 'Error sending the message. Please try again later.';
    }
}
?>

