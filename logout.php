<?php
   header("Location:index.php");
   unset($_SESSION);
   session_destroy();
?>