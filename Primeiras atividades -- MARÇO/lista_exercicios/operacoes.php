<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>operacoes</title>
</head>
<fieldset>
<body>
<legend>Operações</legend>

	<form action="operacoes.php" method="post">

	<lable>Informe o primeiro valor: </lable>
	<input type="txt" name="num1">

	<lable>Informe o segundo valor: </lable>
	<input type="txt" name="num2">

    <input type="submit" name="enviar">

	</form>
	<?php

	error_reporting(0);

	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$soma = $num1 + $num2;

	if($soma>20){
		$final1 = $soma + 8;
		echo "Seu número final é: $final1";
	}

	else if($soma<=20){
		$final2 = $soma - 5;
		echo "Seu número final é $final2";
	}

	?>
</body>
</fieldset>
</html>