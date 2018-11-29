
<?php
session_start();
require_once("models/usuario.php");
// Creem un objecte de tipus usuari
$usuari=new Usuari();
// Vector temporal amb els usuaris
// Després caldrà consultar a la base de dades
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
        setcookie('ZapaOnline', $_SESSION['username'], time() + 365 * 24 * 60 * 60); 
        setcookie('ZapaOnline', $_SESSION['role'], time() + 365 * 24 * 60 * 60); 
    }
    header("Location: index.php");
    exit();
}
else { // Aquesta clau la tancarem després d'afegir codi HTML pur
?>

<html lang=en>

<head>
        <meta charset="UTF-8">
        <title>ZapaOnline</title>

<?php
require_once ("styles.php");
?>

</head>

<body>

    <div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">ERROR!</h4>
  <p class="mb-0">El usuario con el que esta intentando iniciar session no existe. <a href="loginform.php" class="alert-link">Registrar usuario</a>.</p>
</div>
</body>
</html>


<?php
}
?>