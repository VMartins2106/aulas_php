<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ecercicio_12</title>
</head>
<body>
<fieldset>

<legend>Peso</legend>
<form method="POST" action="peso2.php">
<table>

	<tr><td>Informe a sua altura: (separada por ponto)
	<input type="txt" name="h"></td></tr>
	<tr><td>Informe o seu genero:</td></tr>
	<tr><td><input type="radio" name="radio" value="masculino">Masculino</td></tr>
	<tr><td><input type="radio" name="radio" value="feminino">Feminino</td></tr>

	<tr><td><input type="submit" name="btnEnviar"></td></tr>
</table>
</form>
</fieldset>

<?php

	error_reporting(0);

	$h = $_POST['h'];
	$genero = $_POST['radio'];

	if($genero == 'masculino'){
		$p = ($h * 72.7) - 58;
		echo "O seu peso ideal: $p";
	}

	if($genero == 'feminino'){
		$p = ($h * 62.1) - 44.7;
		echo "O seu peso ideal: $p";
	}

	?>
</body>
</html>