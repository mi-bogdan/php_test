<?php
session_start();
require_once 'utils/db.php';
require_once 'utils/test_app.php';
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
Начало: 
        <?php 
          echo $_SESSION['time_start'].'  ';
        ?>
Конец: 
        <?php 
          echo $_SESSION['time_end'];
        ?>
<?php
echo '<br>';
?>
<form action="/utils/test_app.php" method="post">
<?php foreach($test as $value): ?>
  <label for=""><?=$value['title'];?></label>
  <?php
    $array = explode('.',$value['questions']);
    shuffle($array);
  ?>
  <?php foreach($array as $values): ?>
    <div class="form-check">
      <input class="form-check-input position-static" type="radio" name="answers[<?=$value['id']?>]"  value="<?=trim($values)?>"><?=$values?>
    </div>
  <?php endforeach; ?>
 
<?php endforeach; ?>
<button style="margin-top: 30px;" type="submit" class="btn btn-warning">Отправить</button>
</form>

<button type="button" class="btn btn-danger"><a href="/main.php"
                    class="fw-bold text-body"><u> <---- Назад</u></a></button>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>