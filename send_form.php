<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "anthony@avrealtymanagement.com";  // your email
    $subject = "New Contact Form Submission";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for reaching out. We'll be in touch soon!";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
}
?>
