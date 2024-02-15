
<?php
    session_start();
    require_once 'db.php';
    $flag= true;

    $login=$_POST['login'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];

 
    $log_in = mysqli_query($connect,"SELECT * FROM users WHERE `login` = '$login'");
      if (mysqli_num_rows($log_in) == 1){
        $_SESSION['message'] = "Логин занят";
        header('Location: ../regist.php');
        $flag=false;
      }

    if (strlen($login) < 1) {
        $_SESSION['message'] = "Логин не может быть пустым.";
        header('Location: ../regist.php');
        $flag=false;
      }
      else if (!preg_match('/^[a-zA-Zа-яёА-ЯЁ_0-9\-]{1,50}$/', $login)) {
        $_SESSION['message'] = "Логин содержит не корректные символы.";
        $flag=false;
      }
    if($password != $password_confirm){
        $_SESSION['message']='Пароль не совпадает.';
        header('Location: ../regist.php');
        $flag=false;
    }

    if(strlen($password) < 1){
      $_SESSION['message']='Пароль не должен быть такой короткий.';
      header('Location: ../regist.php');
      $flag=false;
  }



    

    if($flag){
        mysqli_query($connect,"INSERT INTO `users` (`id`, `login`, `email`, `password`,`status`) VALUES (NULL, '$login', '$email', '$password', 0)");
        $_SESSION['message']='Регистрация прошла успешно.';
        header('Location: ../index.php');
    }
       
?>



