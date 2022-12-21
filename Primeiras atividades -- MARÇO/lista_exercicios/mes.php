<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ecercicio_14</title>
</head>
<body>
<fieldset>

<legend>Mês</legend>
<form method="POST" action="mes.php">
<table>

	<tr><td>Informe um número:
	<input type="txt" name="n1"></td></tr>
	
	<tr><td><input type="submit" name="btnEnviar"></td></tr>
</table>
</form>
</fieldset>

<?php

	error_reporting(0);

	$n = $_POST['n1'];

	if($n == 1){
		echo 'Você está no mês de janeiro!';
	}

	else if($n == 2){
		echo 'Você está no mês de fevereiro!';
	}

	else if($n == 3){
		echo 'Você está no mês de março!';
	}

	else if($n == 4){
		echo 'Você está no mês de abril!';
	}

	else if($n == 5){
		echo 'Você está no mês de maio!';
	}

	else if($n == 6){
		echo 'Você está no mês de junho!';
	}

	else if($n == 7){
		echo 'Você está no mês de julho!';
	}

	else if($n == 8){
		echo 'Você está no mês de agosto!';
	}

	else if($n == 9){
		echo 'Você está no mês de setembro!';
	}

	else if($n == 10){
		echo 'Você está no mês de outubro!';
	}

	else if($n == 11){
		echo 'Você está no mês de novembro!';
	}

	else if($n == 12){
		echo 'Você está no mês de dezembro!';
	}

	else{
		echo 'Digite um número entre 1 e 12!';
	}

	?>
</body>
</html>