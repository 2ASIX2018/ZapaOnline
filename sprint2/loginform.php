<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta charset="utf-8">
	<?php
	require_once ("styles.php");
	?>
</head>
<body>
<h2>Registro de usuarios</h2>
<form action="registusu.php" method="post">
<input type="text" id="inputUser" name="inputUser" class="form-control" placeholder="Nombre de usuario" required="required" autofocus="autofocus"></br>

<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Escribe tu contraseña" required="required"></br>

<input type="email" id="email" name="email" class="form-control" placeholder="Escribe tu correo electronico" required="required"></br>

<input type="submit" >

</body>
</html>