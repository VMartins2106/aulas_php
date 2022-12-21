<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>numeros</title>
</head>
<fieldset>
<body>
<legend>Numero maior</legend>

	<form action="numeros.php" method="post">

	<lable>Digite o primeiro número: </lable>
	<input type="txt" name="st">

	<lable>Digite o segundo número: </lable>
	<input type="txt" name="nd">

	<lable>Digite o terceiro número: </lable>
	<input type="txt" name="rd">

	<input type="submit" name="enviar">

	</form>
	<?php

	error_reporting(0);

	$primeiro = $_POST['st'];
	$segundo = $_POST['nd'];
	$terceiro = $_POST['rd'];

	if(($primeiro>$segundo) && ($primeiro>$terceiro)){
		echo 'O primeiro número é o maior';
	}

	else if(($segundo>$primeiro) && ($segundo>$terceiro)){
		echo 'O segundo número é o maior';
	}

	else{
		echo 'O terceiro número é o maior';
	}

	?>
</body>
</fieldset>
</html>