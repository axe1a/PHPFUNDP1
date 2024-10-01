<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>      
    <form action="handleForm.php" method="POST">
        <p>Username <input type="text" placeholder="First name here" name="firstName"></p>
        <p>Password <input type="password" placeholder="Password here" name="password"></p>
        <p><input type="submit" value="Login" name="submitBtn"></p>
    </form>
    <a href="unset.php"><input type="submit" value="Logout" name="logout"></a>

    <?php
    // Display login warning if someone is already logged in
    if (isset($_SESSION['loginWarning'])) {
        echo "<p>".$_SESSION['loginWarning']."</p>";
    }
    ?>

    <h2>
        <?php
        // If there's no login warning, display the logged-in user info
        if (!isset($_SESSION['loginWarning']) && isset($_SESSION['firstName'])) {
            echo 'User logged in: ' . $_SESSION['firstName'];
        }
        ?>
    </h2>

    <h2>
        <?php
        // If there's no login warning, display the password (hashed)
        if (!isset($_SESSION['loginWarning']) && isset($_SESSION['password'])) {
            echo 'Password: ' . $_SESSION['password'];
        }
        ?>
    </h2>
</body>
</html>
