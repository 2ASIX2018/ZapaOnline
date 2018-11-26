<?php
session_start();
require_once("models/usuari.php");
// Creem un objecte de tipus usuari
$usuari=new Usuari();
// Vector temporal amb els usuaris
// Després caldrà consultar a la base de dades
$usuaris=["admin", "user"];
$user=$_REQUEST["inputUser"];
$pass=$_REQUEST["inputPassword"];
$remember=$_REQUEST["rememberMe"];
// Comprovem l'usuari amb el mètode validaUsuari
$role=$usuari->validaUsuari($user, $pass);
if ($role){
    // Usuari logat amb èxit.
    $_SESSION['username']=$user;
    $_SESSION['role'] = $role;
    // Si l'usuari ho ha indicat, guardem les credencials
    if($remember=="remember") {
        setcookie('ASIXNewsUser', $_SESSION['username'], time() + 365 * 24 * 60 * 60); 
        setcookie('ASIXNewsRole', $_SESSION['role'], time() + 365 * 24 * 60 * 60); 
    }
    header("Location: index.php");
    exit();
}
else { // Aquesta clau la tancarem després d'afegir codi HTML pur
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
  require_once("Styles.php");
  ?>
    

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Inicio de sesion</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Correo electronico</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Contraseña</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Recordar contraseña
                </label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="index.html">Iniciar</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="formulario.html">Regristrar un usuario</a>
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
require_once "footer.php"; 
?>   

  </body>

</html>
