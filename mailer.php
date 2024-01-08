<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $recipient_email = $_POST["recipient_email"];

    // Your email sending logic here (use the mail function or a library like PHPMailer)
    // Example using the mail function:
    mail($recipient_email, $subject, $message, "From: $name <$email>");

    // Redirect or display a success message
    header("Location: thank-you.html");
    exit();
}
?>
