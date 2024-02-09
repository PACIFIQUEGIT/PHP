<?php
session_start();
require 'config/db_con.php'; 
$name = $password = $email = $gender = '';
$errors = array('name1' => '', 'password' => '','name2' => '','email' => '', 'gender' =>'');
if(isset($_POST['signin']))
{
    if(empty($_POST['email'])) 
    {
    $_SESSION['prevent1'] = 'display: block';
    $errors['email'] = 'An email is required';
    } else 
    {
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $errors['email'] = 'Email must be a valid email address';
    }
    }
    if(empty($_POST['name1'])) 
    {
        $_SESSION['prevent1'] = 'display: block';
        $errors['name1'] = 'Username is empty';
    }
    if(empty($_POST['password']))
    {
      $_SESSION['prevent1'] = 'display: block';
      $errors['password'] = 'Password is empty';
    }
    if(empty($_POST['gender']))
    {
      $_SESSION['prevent1'] = 'display: block';
      $errors['gender'] = 'Must select a gender';
    }
    if(!array_filter($errors))
    {
    $name = mysqli_real_escape_string($con, $_POST['name1']);
    $password = mysqli_real_escape_string($con, $_POST['password']); 
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $sql = "SELECT * FROM users WHERE name = '$name'";
    $query_run = mysqli_query($con, $sql); 
    if(mysqli_num_rows($query_run)>0)
    {
      $_SESSION['prevent1'] = 'display: block';
      $errors['name1'] = 'Username not available';
    }else
    {
    $sql = "INSERT INTO users(name, password, email, gender) VALUES('$name', '$password', '$gender', '$email')";
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
  if(empty($_POST['name2'])||empty($_POST['password'])) 
  {
      $_SESSION['prevent2'] = 'display: block';
      $errors['name2'] = 'Username or Password is empty';
  }
  if(!array_filter($errors))
    {
    $name = mysqli_real_escape_string($con, $_POST['name2']);
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
        $errors['name2'] = 'Wrong Username or Password';
    }
    }  
}
?>