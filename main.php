<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class='logout'>
  <h2 class="h2-cl">Личный кабинет "Пользователя"</h2>
  <h4> <a href="/utils/logout.php">Выход</a></h4>
  </div>
   
    <?php
                  if(isset($_SESSION['main'])){
                    echo '<p class="avtoriz">' . $_SESSION['main'] . '</p>';
                      }
                      unset($_SESSION['main']);
                ?>

    <div class="container">
  <div class="row">
    <div class="col">
      Логин: <?=$_SESSION['user']['login']?>
    </div>
    <div class="col order-12">
      Почта: <?=$_SESSION['user']['email']?>
    </div>
    <div class="col order-1">
      Ваш id: <?=$_SESSION['user']['id']?>
    </div>
  </div>
  <p style='color:red; margin-top:20px;'>ВРЕМЯ ПРОХОЖДЕНИЯ ТЕСТА 2 МИНУТЫ!!!</p>
  <button " type="submit" class="btn btn-warning"><a href="/test.php"
                    class="fw-bold text-body"><u>Пройти тест --></u></a></button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>