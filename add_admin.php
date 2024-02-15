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

<form style="width:800px;" action="/utils/admin_add_app.php" method="post">
<?php
    if(isset($_SESSION['add'])){
        echo '<p class="avtoriz">' . $_SESSION['add'] . '</p>';
    }
    unset($_SESSION['add']);
    ?>
  <div class="form-group div-add">
    <label for="formGroupExampleInput">Вопрос</label>
    <input name="question" type="text" class="form-control" id="formGroupExampleInput" placeholder="Вопрос">
  </div>
  <div class="form-group div-add">
    <label for="formGroupExampleInput2">Ответ</label>
    <input name="answer" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ответ">
  </div>
  <div class="form-group div-add">
    <label for="formGroupExampleInput2">Варианты ответов</label>
    <input name="answer-options" type="text" style="height:50px;" class="form-control" id="formGroupExampleInput2" placeholder="Варианты ответо">
  </div>
  <button  type="submit" class="btn btn-warning">Добавить</button>
</form>

<button type="button" class="btn btn-danger"><a href="/admin.php"
                    class="fw-bold text-body"><u> <---- Назад</u></a></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>