<?php
session_start();
require_once('connection.php');
echo 'asdww';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == '' && $_POST['password'] == '') {
        $_SESSION['Registermessege'] = "Invalid Username or password";
        return;
    } else {
        $username = $_POST['username'];
        $password =  md5($_POST['password']);
        //insert intodatabase
        $sql = "INSERT INTO user (username,password) VALUES ('{$username}','{$password}')";
        $result = mysqli_query($con, $sql);
        echo $result;
        if ($result) {
            $_SESSION['Registermessege'] = "Register Successfully";
            header("Location:index.php");
        } else {
            $_SESSION['Registermessege'] = "Register Failed";
            // header("Location:login.php");
            echo 'register failed';
        }
        echo mysqli_error($mysqli,$result);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SESSION['Registermessege'] && $_SESSION['Registermessege'] != '') {
        echo $_SESSION['Registermessege'];
        $_SESSION['Registermessege'] = '';
    }
    ?>

    <form action="" method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>