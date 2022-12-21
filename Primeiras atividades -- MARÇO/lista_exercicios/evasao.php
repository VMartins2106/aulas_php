<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ecercicio_9</title>
</head>
<body>
<fieldset>

<legend>Media de notas</legend>
<form method="POST" action="evasao.php">
<table>

	<tr><td>Informe a quantidade de alunos matriculados:
	<input type="txt" name="matriculados"></td></tr>
	<tr><td>Informe a quantidade de alunos formados:
	<input type="txt" name="formados"></td></tr>
	
	<tr><td><input type="submit" name="btnEnviar"></td></tr>
</table>
</form>
</fieldset>

<?php
	error_reporting(0);

	$m = $_POST['matriculados'];
	$f = $_POST['formados'];

	$media = $m - $f;
	$evasao = $media/$m;
	$porcentagem = $evasao*100;

	if($porcentagem<10){
		echo "Evasão de: $porcentagem %\n";
		echo 'Situação: evasão baixa';
	}
	else if(($porcentagem>=10) && ($porcentagem<15)){
		echo "Evasão de: $porcentagem %\n";
		echo 'Situação: evasão media';
	}
	else if(($porcentagem>=15) && ($porcentagem<25)){
		echo "Evasão de: $porcentagem %";
		echo 'Situação: evasão alta';
	}
	else if($porcentagem>=25){
		echo "Evasão de: $porcentagem %";
		echo 'Situação: evasão muito alta';
	}

	?>
</body>
</html>