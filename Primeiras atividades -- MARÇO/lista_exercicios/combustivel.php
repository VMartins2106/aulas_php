<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ecercicio_16</title>
</head>
<body>
<fieldset>

<legend>Volume</legend>
<form method="POST" action="combustivel.php">
<table>

	<tr><td>Informe a distância total (em km) percorrida pelo automóvel:
	<input type="txt" name="n1"></td></tr>
	<tr><td>Informe a quantidade de combustível (em litros) consumido:
	<input type="txt" name="n2"></td></tr>
	
	<tr><td><input type="submit" name="btnEnviar"></td></tr>
</table>
</form>
</fieldset>

<?php
	error_reporting(0);

	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];

	$final = $n1/$n2;

	echo "O consumo médio de combustível é de: $final km/L";

	?>
</body>
</html>