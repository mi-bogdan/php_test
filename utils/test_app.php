<?php 
session_start();
require_once 'db.php';
$test = mysqli_query($connect, "SELECT * FROM `tests`");
$dat=date('H:i');
$tests=mysqli_fetch_assoc($test);
$count=0;

if (!isset($_SESSION['time_start'])) {
    $_SESSION['time_start'] = date('H:i');
    }

if (!isset($_SESSION['time_end'])) {
    $_SESSION['time_end'] = date("H:i", strtotime("+2 minutes"));
    }
   
    if (date('H:i')> $_SESSION['time_end']){
      unset($_SESSION['time_end']);
      unset($_SESSION['time_start']);
      header('Location: /main.php');
      $_SESSION['main']='Ваше время вышло, попробуйте еще раз (((';
      
    }else{
        if($_POST){
            $answers_db=[];
            foreach($test as $t){
                array_push($answers_db, $t['answers']);
              }
            
            foreach($_POST['answers'] as $val1){
              foreach($answers_db as $val2){
                if ($val1==$val2){
                  $count++;
                }
              }
            
            }
            $id_users=$_SESSION['user']['id'];
            $tam_st=$_SESSION['time_start'];

            mysqli_query($connect,"INSERT INTO `results` (`id`, `id_user`, `start_time`, `pass_time`,`сorrect_answers`) VALUES (NULL, '$id_users', '$tam_st', '$dat', '$count')");
            if ($count<5){
              $_SESSION['main']='Ваш результат теста: '. $count.'. Попробуйте еще раз)';

            }
            if ($count==5){
              $_SESSION['main']='Ваш результат теста: '. $count.'. Результат отличный!';

            }
            header('Location: ../main.php');
        
        }

        
    }




// if ($_POST) {
//     echo '<pre>';
//     echo htmlspecialchars(print_r($_POST, true));
//     echo '</pre>';
// }
?>