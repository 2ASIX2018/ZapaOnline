<!DOCTYPE html>
<html>
<body>
<?php
echo ("<p>El teu nom és: ".$_REQUEST["name"]."</p>");
echo ("<p>Tus apellidos son:".$_REQUEST["apellidos"]."</p>");
echo ("<p>Tu fecha de nacimiento es:".$_REQUEST["data"]."</p>");
echo ("<p>Tu correo electronico es:".$_REQUEST["email"]."</p>");
echo ("<p>Tu eres:".$_REQUEST["genere"]."</p>");
echo ("<p>Tu contraseña es:".$_REQUEST["password"]."</p>");
echo ("<p>Tu contraseña es:".$_REQUEST["repeat_password"]."</p>");



?>
</body>
</html>