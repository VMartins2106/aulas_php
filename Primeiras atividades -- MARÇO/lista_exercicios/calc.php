<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ecercicio_13</title>
</head>
<body>
<fieldset>

<legend>Calculadora</legend>
<form method="POST" action="calc.php">
<table>

	<input type="radio" name="radio" value="soma">Soma</td></tr>
	<input type="radio" name="radio" value="subtracao">Subtração</td></tr>
	<input type="radio" name="radio" value="multiplicacao">Multiplicação</td></tr>
	<input type="radio" name="radio" value="divisao">Divisão</td></tr>

	<tr><td>Informe o primeiro valor:
	<input type="txt" name="n1"></td></tr>

	<tr><td>Informe o segundo valor:
	<input type="txt" name="n2"></td></tr>

	<tr><td><input type="submit" name="btnEnviar"></td></tr>
</table>
</form>
</fieldset>

<?php

	error_reporting(0);

	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$calc = $_POST['radio'];

	if($calc == 'soma'){
		$final = $n1 + $n2;
		echo "O seu resultado é: $final";
	}

	else if($calc == 'subtracao'){
		$final = $n1 - $n2;
		echo "O seu resultado é: $final";
	}

	else if($calc == 'multiplicacao'){
		$final = $n1 * $n2;
		echo "O seu resultado é: $final";
	}

	else if($calc == 'divisao'){
		$final = $n1 / $n2;
		echo "O seu resultado é: $final";
	}

	?>
</body>
</html>