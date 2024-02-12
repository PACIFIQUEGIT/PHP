<?php
session_start();
require 'config/db_con.php'; 
$username = $name = $password = $email = $gender = $province = $district = $sector = $course = '';
$errors = array('username' => '', 'name1' => '', 'password' => '','name2' => '','email' => '', 'gender' =>'', 'genderr' =>'', 'namer' => '', 'emailr' => '', 'sectorr' => '', 'districtr' => '', 'provincer' => '', 'course' => '');
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
    if(empty($_POST['name1'])) 
    {
        $_SESSION['prevent1'] = 'display: block';
        $errors['name1'] = 'Username is empty';
    }else
    {
    $username = mysqli_real_escape_string($con, $_POST['name1']);
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $query_run = mysqli_query($con, $sql); 
    if(mysqli_num_rows($query_run)>0)
    {
      $_SESSION['prevent1'] = 'display: block';
      $errors['name1'] = 'Username not available';
    }else
    {
    if(!array_filter($errors))
    {
    $password = mysqli_real_escape_string($con, $_POST['password']); 
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $sql = "INSERT INTO users(username, password, gender, email) VALUES('$username', '$password', '$gender', '$email')";
    $query_run = mysqli_query($con, $sql);
    if($query_run)
    {   
      $_SESSION['name'] = $username;
        header("Location:dashboard.php");
        exit(0);
    } 
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
    $username = mysqli_real_escape_string($con, $_POST['name2']);
    $password = mysqli_real_escape_string($con, $_POST['password']); 
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $query_run = mysqli_query($con, $sql); 
    if(mysqli_num_rows($query_run)>0)
    {
      $_SESSION['name'] = $username;
        header("Location:dashboard.php");
        
    } else
    {
        $_SESSION['prevent2'] = 'display: block';
        $errors['name2'] = 'Wrong Username or Password';
    }
    }  
}
if(isset($_POST['signinr']))
{
    if(empty($_POST['emailr'])) 
    {
    $_SESSION['prevent1'] = 'display: block';
    $errors['emailr'] = 'An email is required';
    } else 
    {
    $email = $_POST['emailr'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        $errors['emailr'] = 'Email must be a valid email address';
    }
    }
    if(empty($_POST['districtr']))
    {
      $_SESSION['prevent1'] = 'display: block';
      $errors['districtr'] = 'District is empty';
    }
    if(empty($_POST['provincer']))
    {
      $_SESSION['prevent1'] = 'display: block';
      $errors['provincer'] = 'Province is empty';
    }
    if(empty($_POST['sectorr']))
    {
      $_SESSION['prevent1'] = 'display: block';
      $errors['sectorr'] = 'Sector is empty';
    }
    if(empty($_POST['course']))
    {
      $_SESSION['prevent1'] = 'display: block';
      $errors['course'] = 'Course is empty';
    } 
    if(empty($_POST['genderr']))
    {
      $_SESSION['prevent1'] = 'display: block';
      $errors['genderr'] = 'Must select a gender';
    }
    if(empty($_POST['namer'])) 
    {
        $_SESSION['prevent1'] = 'display: block';
        $errors['namer'] = 'Names is empty';
    }else
    {
    //$name = mysqli_real_escape_string($con, $_POST['namer']);
    //$sql = "SELECT * FROM users WHERE name = '$name'";
    //$query_run = mysqli_query($con, $sql); 
    //if(mysqli_num_rows($query_run)>0)
    //{
    //  $_SESSION['prevent1'] = 'display: block';
    //  $errors['namer'] = 'Username not available';
    //}else
    //{
    if(!array_filter($errors))
    {
    $district = mysqli_real_escape_string($con, $_POST['districtr']); 
    $province = mysqli_real_escape_string($con, $_POST['provincer']);
    $sector = mysqli_real_escape_string($con, $_POST['sectorr']);
    $email = mysqli_real_escape_string($con, $_POST['emailr']);
    $gender = mysqli_real_escape_string($con, $_POST['genderr']);
    $namer = mysqli_real_escape_string($con, $_POST['namer']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $sql = "INSERT INTO registered(name, course, district, province, gender, email, sector) VALUES('$namer', '$course', '$district','$province', '$gender', '$email', '$sector')";
    $query_run = mysqli_query($con, $sql);
    if($query_run)
    {   $_SESSION['message'] = "Student registerd successfully."; 

       header("Location:register.php"); 
        exit(0);
    } 
    }
    }
}
if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);
    $sql = "DELETE FROM registered WHERE id = '$student_id'";
    $query_run = mysqli_query($con, $sql);
    if($query_run)
    {
        $_SESSION['message'] = 'Student Deleted Successfully.';
        header('Location:registeredstudents.php');
        exit(0);
    } else {
        $_SESSION['message'] = 'Student Not Deleted.';
        header('Location:registeredstudents.php');
        exit(0);
    }
    }
?>