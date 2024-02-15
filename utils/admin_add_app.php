<?php
    session_start();
    require_once 'db.php';
    

    $question=$_POST['question'];
    $answer=$_POST['answer'];
    $answer_options=$_POST['answer-options'];
   
    mysqli_query($connect,"INSERT INTO `tests` (`id`, `title`, `questions`, `answers`) VALUES (NULL, '$question', '$answer_options', '$answer')");
    $_SESSION['add']='Тест был добавлен';
    header('Location: ../add_admin.php');
      
?>