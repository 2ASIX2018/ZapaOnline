<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pagina donde mostraremos nuestros zapatos</title>

<?php
require_once ("styles.php");
//if (!isset($_SESSION['role']) {
//header("location: index.php");// asi estem diguentli que si no te rol no podra visualisar la pagina, es a dir, tenim dos rols user i admin, si noes cualsevols dawuestos vol dir que no esta logueat.
//}
if ($_SESSION['role']!="user") header("location: index.php");
// no funciona(pero per ahi van els tirs)if ($_SESSION['role']!="user"  || $_SESSION['role']!="admin" header("location: index.php"));// asi estem diguenñi que sol en enseñe esta pagina si el role de usuario es user o admin si nos que en dirigixca a index.php perque no som ningu pa vore aixo role es (user o admin), esta pagina la podrien vorer els dos
?>

  </head>

  <body>

    <?php
    require ("menu.php");
    ?>
<?php
require_once ("models/zapatos.php");
$llista= new zapatos(); // zapatos sera el nombre de la clase que estamos llamando de zapatos.php 
$llistat=$llista->llistazapas();

for ($i=0; $i<count($llistat); $i++){

?>

  <div class="card mb-3">
  <h3 class="card-header"> <?php echo($llistat[$i]["nombre"]);?></h3>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
  </div>
  <img style="height: 200px; width: 15%; display: block;" src=" <?php echo($llistat[$i]["img"]);?> " alt="Card image">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

<?php
} // aqui estamos cerrando la virgulilla del for anterior
?> 


<?php 
require_once ("footer.php"); 
?>   
  </body>

</html>
