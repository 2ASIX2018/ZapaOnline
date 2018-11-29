<html lang=en>
<?php
session_start();
?>
<head>
        <meta charset="UTF-8">
        <title>ZapaOnline</title>

<?php
require_once ("styles.php");
if ($_SESSION['role']!="admin") header("location: index.php");// asi estem diguenñi que sol en enseñe esta pagina si el rol de usuario es user si nos que en dirigixca a index.php perque no som ningu pa vore aixo
?>


</head>
<body>
<div class="jumbotron">
  <h1 class="display-3">Buenas!</h1>
  <p class="lead">En este momento estas ejecutando la pagina como administrador.</p>
  <hr class="my-4">

  </p>
</div>
</body>
</html>