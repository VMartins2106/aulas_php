<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ecercicio_8</title>
</head>
<body>
<fieldset>

<legend>Media de notas</legend>
<form method="POST" action="safra.php">
<table>

	<tr><td>Informe a quantidade, em kilos, de cana-de-açúcar colhida :
	<input type="txt" name="safra"></td></tr>
	
	<tr><td><input type="submit" name="btnEnviar"></td></tr>
</table>
</form>
</fieldset>

<?php
	error_reporting(0);

	$safra = $_POST['safra'];

	if($safra<=1000){
		echo 'Situação abaixo da meta';
	}
	else if(($safra>1000) && ($safra<=5000)){
		echo 'Situação dentro da meta';
	}
	else if($safra>5000){
		echo 'Situação acima da meta';
	}
?>
</body>
</html>