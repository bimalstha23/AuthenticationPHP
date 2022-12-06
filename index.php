<?php
    session_start();
    if (isset($_POST['submit'])){  
        header("Location:dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN-FORM</title>
 
</head>
<body>
    <?php
        if(isset($_SESSION['message']) && ($_SESSION['message'] != '')){
            // echo $_SESSION['message'];
        } 
    ?>
    <div class="container">
        <form class="formClass" action="process.php" method="POST">
            username:<input type="text" name="username" placeholder="Enter your name">
            <br>
            password:<input type="password" name="password" placeholder="Enter your password">
            <br>
            <input type="submit" name="submit" value="Login">
            <p>Don't Have Account?
                <a href="Register.php">Create Account</a>
            </p>
        </form>
    </div>
</body>
</html>