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
<form method="POST" action="volume.php">
<table>

	<tr><td>Informe o valor do comprimento:
	<input type="txt" name="n1"></td></tr>
	<tr><td>Informe o valor da largura:
	<input type="txt" name="n2"></td></tr>
	<tr><td>Informe o valor da altura:
	<input type="txt" name="n3"></td></tr>
	
	<tr><td><input type="submit" name="btnEnviar"></td></tr>
</table>
</form>
</fieldset>

<?php
	error_reporting(0);

	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];

	$final = $n1 * $n2 * $n3;

	echo "O volume do seu retângulo é: $final";

	?>
</body>
</html>