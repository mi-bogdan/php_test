<?php 
session_start();
require_once 'utils/db.php';



$result=mysqli_query($connect,"SELECT * FROM `results` INNER JOIN `users` ON users.id = results.id_user");


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
    <div class='wrapper'>
    <h1 style='color:red;'>Панель администратора</h1>
    <div class='admin-flex'>
    <button type="submit" class=" b btn btn-success"><a href="/add_admin.php"
                    class="fw-bold text-body"><u>Добать тест</u></a></button>
    <h4> <a href="/utils/logout.php">Выход</a></h4>
  
    </div>
    
    </div>
    <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Логин</th>
      <th scope="col">Начальное время</th>
      <th scope="col">Законченное время</th>
      <th scope="col">Счет</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($result as $v): ?>
    <tr>
      <th scope="row"><?=$v['id']?></th>
      <td><?=$v['login']?></td>
      <td><?=$v['start_time']?></td>
      <td><?=$v['pass_time']?></td>
      <td><?=$v['сorrect_answers']?></td>
    </tr>
  <?php endforeach; ?>

  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>