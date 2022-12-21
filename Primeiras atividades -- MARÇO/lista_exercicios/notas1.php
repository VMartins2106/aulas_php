<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Notas</title>
</head>
<fieldset>
<body>
<legend>Notas</legend>

	<form action="notas.php" method="post">

	<lable>Digite a primeira nota: </lable>
	<input type="txt" name="st">

	<lable>Digite a segunda nota: </lable>
	<input type="txt" name="nd">

	<lable>Digite a terceira nota: </lable>
	<input type="txt" name="rd">

	<input type="submit" name="enviar">

	</form>

	<?php

	error_reporting(0);

	$primeira = $_POST['st'];
	$segunda = $_POST['nd'];
	$terceira = $_POST['rd'];
	$media = ($primeira+$segunda+$terceira)/3;

	if($media>=5){
		echo 'Aluno aprovado!';
	}

	else{
		echo 'Aluno reprovado!';
	}

	?>

</body>
</fieldset>
</html>