<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trapezio</title>
</head>
<fieldset>
<body>
<legend>Trapézio</legend>

	<form action="trapezio.php" method="post">

		<lable>Digite a altura do trapézio: </lable>
		<input type="txt" name="hTrapezio">

		<lable>Digite a base maior do trapézio: </lable>
		<input type="txt" name="bMaior">

		<lable>Digite a base menor do trapézio: </lable>
		<input type="txt" name="bMenor">

		<input type="submit" name="enviar">

	</form>
	<?php

	error_reporting(0);

		$bMenor = $_POST['bMenor'];
		$bMaior = $_POST['bMaior'];
		$h = $_POST['hTrapezio'];

		$a = (($bMaior + $bMenor)*$h)/2;

		echo "A área do seu trapézio é: $a";
	?>
</fieldset>
</body>
</html>