<?php
session_start();
require_once("models/zapatos.php");
// Creem un objecte de tipus usuari
$producte=new zapatos();
// Vector temporal amb els usuaris
// Després caldrà consultar a la base de dades
$nombre=$_REQUEST["inputproduct"];
$categoria=$_REQUEST["inputcat"];
$img=$_REQUEST["img"];
// Comprovem l'usuari amb el mètode validaUsuari
$producte->anadirzapas($nombre, $categoria, $img);


?>