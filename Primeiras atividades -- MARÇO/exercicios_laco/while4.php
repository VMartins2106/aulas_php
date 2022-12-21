<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exemplo tabuada</title>
</head>
<body>
	<form method="POST" action="while4.php">
	Escolha um valor para sua respectiva tabuada: 
	<input type="txt" name="txt1">

	<input type="submit" name="btnEnviar">
	</form>

	<?php
	error_reporting(0);
	$num = $_POST['txt1'];
	$cont = 0;
	while($cont<=10)
	{
		$final = $cont*$num;
		echo"$num x $cont = $final<br>";
		$cont++;
		}
	?>
</body>
</html>