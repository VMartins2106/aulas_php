<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ecercicio_11</title>
</head>
<body>
<fieldset>

<legend>Peso</legend>
<form method="POST" action="peso1.php">
<table>

	<tr><td>Informe a sua altura: (separada por ponto)
	<input type="txt" name="h"></td></tr>
	
	<tr><td><input type="submit" name="btnEnviar"></td></tr>
</table>
</form>
</fieldset>

<?php

	error_reporting(0);

	$h = $_POST['h'];

	$p = (72.7 * $h) - 58;

	
	echo "O seu peso ideal: $p";

	?>
</body>
</html>