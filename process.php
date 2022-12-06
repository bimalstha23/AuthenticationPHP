<?php
session_start();
require_once('connection.php');
if (isset($_POST['submit'])) {
  if($_POST['username'] =='' && $_POST['password'] == ''){
    $_SESSION['message'] = "Invalid Username";
    header("Location:index.php");
  }
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = " SELECT * FROM user WHERE username= '{$username}' AND password= '{$password}' ";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  print_r($row);

  if ($row) {
    echo ('Going well !!');
    $_SESSION['username'] = $row['username'];
    header("Location:dashboard.php");
  } else {
    echo ('Not going well !!');
    header("Location:index.php");

  }
}
?>