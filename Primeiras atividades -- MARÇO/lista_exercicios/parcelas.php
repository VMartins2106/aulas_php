<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ecercicio_6</title>
</head>
<body>
<fieldset>

<legend>Direito com base nos meses trtabalhados</legend>
<form method="POST" action="parcelas.php">
<table>

	<tr><td>Informe os meses trabalhados:
	<input type="txt" name="mes"></td></tr>
	
	<tr><td><input type="submit" name="btnEnviar"></td></tr>
</table>
</form>
</fieldset>

<?php
	error_reporting(0);

	$meses = $_POST['mes'];

	if($meses<6){
		echo 'Você não tem direito!';
	}
	else if(($meses>=6) && ($meses<=11)){
		echo 'Você tem direito a 3 parcelas';
	}
	else if(($meses>11) && ($meses<=24)){
		echo 'Você tem direito a 4 parcelas';
	}
	else if($meses>24){
		echo'Você tem direito a 5 parcelas';
	}

?>
</body>
</html>