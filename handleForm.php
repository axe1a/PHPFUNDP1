<?php 
session_start();

// Check if submitBtn exists
if (isset($_POST['submitBtn'])) {

    // Check if someone is already logged in
    if (isset($_SESSION['firstName'])) {
        // Set a login warning message
        $_SESSION['loginWarning'] = $_SESSION['firstName'] . ' is already logged in. Wait for them to logout first.';
        unset($_SESSION['firstName']);
        unset($_SESSION['password']);
        // Redirect back to index.php with the warning
        header('Location: index.php');
        exit(); // Important: exit to stop script execution after redirection
    }

    // If no user is logged in, process the login
    $firstName = $_POST['firstName'];
    $password = md5($_POST['password']); // Hash the password

    // Set session variables for the logged-in user
    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;
    $_SESSION['loginWarning'] = $loginWarning;

    // Go back to index.php
    header('Location: index.php');
}
?>
