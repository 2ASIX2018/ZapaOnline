<?php
session_start();
require_once("models/usuario.php");
// Creem un objecte de tipus usuari
$usuari=new Usuari();
// Vector temporal amb els usuaris
// Després caldrà consultar a la base de dades
$user=$_REQUEST["inputUser"];
$pass=$_REQUEST["inputPassword"];
$remember=$_REQUEST["email"];
// Comprovem l'usuari amb el mètode validaUsuari
$role=$usuari->registUsuari($user, $pass, $correu);


?>