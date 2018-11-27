<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Registro de usuarios</h1>
<form action="registro.php" method="post">

<h3>Nombre.</h3>
<input type="text" name="name" required="required"><br/>

<h3>Apellidos.</h3>
<input type="text" name="apellidos" required="required"><br/>

<h3>Data de nacimiento.</h3>
<input type="month" name="data"><br/>

<h3>Correo electronico.</h3>
<input type="email" name="email"><br/>

<h3>Define tu genero.</h3>
<input type="radio" name="genere" value="home" checked> Hombre<br/>
<input type="radio" name="genere" value="dona"> Mujer<br/>
<input type="radio" name="genere" value="altres"> Otros<br/>

<h3>Define tu contraseña.</h3>
<input type="password" name="password"><br>

<h3>Repite tu contraseña.</h3>
<input type="password" name="repeat_password"><br>

<input type="submit" >
</body>
</html>