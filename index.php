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
<section class="vh-100 bg-image"
  style="background-image: url('../img/s1200.jpg');">
  <h1>ТЕСТ IT</h1>
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Авторизация "ТЕСТА IT"</h2>
              <?php
                  if(isset($_SESSION['message'])){
                    echo '<p class="avtoriz">' . $_SESSION['message'] . '</p>';
                      }
                      unset($_SESSION['message']);
                  
                      if(isset($_SESSION['msg'])){
                        echo '<p class="msg">' . $_SESSION['msg'] . '</p>';
                          }
                          unset($_SESSION['msg']);
                ?>

              <form action="/utils/signin.php" method="post">
                <div class="form-outline mb-4">
                  <input type="text" name="login" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Логин</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Пароль</label>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Войти</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Нет аккаунта? <a href="/regist.php"
                    class="fw-bold text-body"><u>Зарегистрирываться</u></a></p>
                   
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>