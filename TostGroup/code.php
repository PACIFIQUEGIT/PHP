<?php
require 'db_con.php';
$errors = array('name' => '', 'password' => '');
if(isset($_POST['signin']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']); 
    $password = mysqli_real_escape_string($con, $_POST['password']); 
    $sql = "INSERT INTO users(name, password) VALUES('$name', '$password')";
    $query_run = mysqli_query($con, $sql);
    if($query_run)
    {
        session_start();
        $_SESSION['message'];
        header('Location:loggedin.php');
        exit(0);
    }else
    {
        $_SESSION['failure'];
    }
}

?>

