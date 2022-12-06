<?php
  session_start();
  require_once('connection.php');
  if (isset($_POST['submit']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>

</head>
<body>
  <div class="container">
    Welcome <?php echo $_SESSION['username'] ?>
    <a href="logout.php">Logout</a>
  </div>
</body>
</html>