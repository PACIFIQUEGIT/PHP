<?php
session_start();
require 'config/db_con.php'; 
$name = $password = '';
$errors = array('name' => '', 'password' => '');
if(isset($_POST['signin']))
{
    if(empty($_POST['name'])||empty($_POST['password'])) 
    {
        $_SESSION['prevent1'] = 'display: block';
        $errors['name'] = 'Name or Password is empty';
    }
    if(!array_filter($errors))
    {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']); 
    $sql = "SELECT * FROM users WHERE name = '$name'";
    $query_run = mysqli_query($con, $sql); 
    if(mysqli_num_rows($query_run)>0)
    {
      $_SESSION['prevent1'] = 'display: block';
      $errors['name'] = 'Name not available';
    }else
    {
    $sql = "INSERT INTO users(name, password) VALUES('$name', '$password')";
    $query_run = mysqli_query($con, $sql);
    if($query_run)
    {   
      $_SESSION['name'] = $name;
        header("Location:dashboard.php");
        exit(0);
    } 
    }
    }
}
if(isset($_POST['login']))
{
  if(empty($_POST['name'])||empty($_POST['password'])) 
  {
      $_SESSION['prevent2'] = 'display: block';
      $errors['name'] = 'Name or Password is empty';
  }
  if(!array_filter($errors))
    {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password = mysqli_real_escape_string($con, $_POST['password']); 
    $sql = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";
    $query_run = mysqli_query($con, $sql); 
    if(mysqli_num_rows($query_run)>0)
    {
      $_SESSION['name'] = $name;
        header("Location:dashboard.php");
        
    } else
    {
        $_SESSION['prevent2'] = 'display: block';
        $errors['name'] = 'Wrong Name or Password';
    }
    }  
}
?>