<?php 
    $host="localhost";
    $user="root";
    $pass='';
    $db="Auth";
    $con=mysqli_connect('localhost','root','','Auth');
    if(!$con){
        die('Not connected');
    }