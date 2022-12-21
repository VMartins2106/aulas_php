<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ecercicio_15</title>
</head>
<body>
<fieldset>

<legend>Biblioteca</legend>
<form method="POST" action="biblioteca.php">
<table>

	<tr><td>Informe o nome do livro:
	<input type="txt" name="n1"></td></tr>

	<tr><td>Informe o nome do usuário:
	<input type="txt" name="n2"></td></tr>

	<tr><td>Informe o tipo do usuário:
	<input type="radio" name="radio" value="professor">Professor
	<input type="radio" name="radio" value="aluno">Aluno
	
	<tr><td><input type="submit" name="btnEnviar"></td></tr>
</table>
</form>
</fieldset>

	<?php

	error_reporting(0);

	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$type = $_POST['radio'];

	if($type == 'professor'){
		echo "Você tem que devolver o livro: $n1 <br>";
		echo "Seu usuário é: $n2 <br>";
		echo "Você tem 10 dias para devolver o livro";
	}

	else if($type == 'aluno'){
		echo "Você tem que devolver o livro: $n1 <br>";
		echo "Seu usuário é: $n2 <br>";
		echo "Você tem 3 dias para devolver o livro";
	}

	?>
</body>
</html>