<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "chris2pherheath@gmail.com"; // Replace with your email address
    $headers = "From: $email\r\n";

    mail($to, $subject, $message, $headers);
    echo "Email sent successfully!";
}
?>