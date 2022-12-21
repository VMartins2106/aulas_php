<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ecercicio_7</title>
</head>
<body>
<fieldset>

<legend>Media de notas</legend>
<form method="POST" action="notas.php">
<table>

	<tr><td>Informe a nota prova:
	<input type="txt" name="p"></td></tr>
	<tr><td>Informe a nota do trabalho
	<input type="txt" name="t"></td></tr>
	
	<tr><td><input type="submit" name="btnEnviar"></td></tr>
</table>
</form>
</fieldset>

<?php
	error_reporting(0);

	$p = $_POST['p'];
	$t = $_POST['t'];

	$media = (($t*4)+($p*6))/10;
	echo "Sua média é: $media";	

?>
</body>
</html>