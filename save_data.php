<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    // Redirect to save_data.html after submission
    header("Location: save_data.html");
    exit();
}
?>
