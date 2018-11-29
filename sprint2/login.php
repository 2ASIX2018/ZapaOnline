<?php
session_start();
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

 <?php
  require_once ("styles.php");
  ?>
    

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Inicio de sesion</div>
        <div class="card-body">
          
          <form action="logincheck.php" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="text" required="required" autofocus="autofocus">
                <label for="inputEmail">Nombre de usuario</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Contraseña</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="rememberMe" value="remember-me">
                  Recordar contraseña
                </label>
              </div>
            </div>
            <input class="btn btn-primary btn-block" type="submit" >
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="loginform.php">Regristrar un usuario</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<?php 
require_once ("footer.php"); 
?>   

  </body>

</html>
