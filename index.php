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
    <a href="unset.php"><input type="submit" value="Logout" name="logout"></p></a>
    
    <?php
    if (isset($_SESSION['loginWarning'])) {
        echo $_SESSION['loginWarning'];    
    }
    ?>
    <h2>
        
        <?php
        if(isset($_SESSION['firstName'])) {
            echo 'User logged in: ';
            echo $_SESSION['firstName'];
        }
        ?>      
    </h2>

    <h2>
        <?php
        if(isset($_SESSION['password'])) {
            echo 'Password: ';
            echo $_SESSION['password'];
        }
        ?>      
    </h2>



</body>
</html>
