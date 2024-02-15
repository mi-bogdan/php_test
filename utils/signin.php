<?php
session_start();
require_once 'db.php';

$login=$_POST['login'];
$password=$_POST['password'];


$check_user=mysqli_query($connect,"SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password';");

$user=mysqli_fetch_assoc($check_user);

$_SESSION['user']=[
  "id"=>$user['id'],
  "login"=>$user['login'],
  "email"=>$user['email']
];

if (mysqli_num_rows($check_user) == 1){
  if($user['status']==1){
    header('Location: /admin.php');
  }else{
    header('Location: /main.php');
  }
  }
   
  else{
    $_SESSION['msg'] = "Не верный логин или пароль";
    header('Location: /index.php');
  }
?>