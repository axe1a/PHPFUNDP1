<?php 
session_start();

// Check if submitBtn exists
if (isset($_POST['submitBtn'])) {
    $firstName = $_POST['firstName'];
    $password = md5($_POST['password']); // Hash the password

    // Check if someone is already logged in
    if (isset($_SESSION['firstName']) && $_SESSION['firstName'] !== null) {
        // Set a login warning message
        $_SESSION['loginWarning'] = $_SESSION['firstName'] . ' is already logged in. Wait for them to logout first.';

        // Prevent further login attempts by not allowing credentials to be set again
        
        header('Location: index.php');
        exit(); // Important: exit to stop script execution after redirection
    } else {
        // If no user is logged in, process the login
        $_SESSION['firstName'] = $firstName;
        $_SESSION['password'] = $password;

        // Go back to index.php
        header('Location: index.php');
        exit(); // Ensure we exit after redirection
    }
}
?>
