<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ecercicio_10</title>
</head>
<body>
<fieldset>

<legend>Media de notas</legend>
<form method="POST" action="fiscais.php">
<table>

	<tr><td>Informe o valor arrecadado das inscrições:
	<input type="txt" name="n1"></td></tr>
	<tr><td>Informe a quantidade de fiscais:
	<input type="txt" name="n2"></td></tr>
	<tr><td>Informe o valor gasto com alimentação:
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

	$final = $n1 - ($n2*70) - $n3;

	
	echo "O valor líquido deu: $final";

	?>
</body>
</html>