<!DOCTYPE html>
<html>
<head>
	<title>Formulario de productos</title>
	<meta charset="utf-8">
	<?php
	require_once ("styles.php");
	?>
</head>
<body>
<h2>Registro de productos</h2>
<form action="productcheck.php" method="post">
<input type="text" id="inputproduct" name="inputproduct" class="form-control" placeholder="Nombre de producto" required="required" autofocus="autofocus"></br>

<input type="text" id="inputcat" name="inputcat" class="form-control" placeholder="Escribe la categoria de tus zapatos" required="required"></br>

<input type="text" id="img" name="img" class="form-control" placeholder="Escribe la ruta de la img" required="required"></br>

<input type="submit" >

</body>
</html>