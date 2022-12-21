<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>moeda</title>
</head>
<fieldset>
<body>
<legend>Moeda</legend>

	<form action="moedas.php" method="post">

	<lable>Digite o valor a ser convertido em reais: </lable>
	<input type="txt" name="reais">

	<select name="moeda">
        <option></option>
        <option value="dolar">Dólar</option>
        <option value="euro">Euro</option>
        <option value="libra">Libra</option>
      </select>

      <input type="submit" name="enviar">

	</form>
	<?php



	$reais = $_POST['reais'];
	$conversao = $_POST['moeda'];

	if($conversao=="dolar"){
		$convertidoDolar = $reais/5.40;
		echo "Sua conversão dá: $convertidoDolar";
	}

	else if($conversao=="euro"){
		$convertidoEuro = $reais/6.50;
		echo "Sua conversão dá: $convertidoEuro";
	}

	else if($conversao=="libra"){
		$convertidoLibra = $reais/7;
		echo "Sua conversão dá: $convertidoLibra";
	}

	?>
</body>
</fieldset>
</html>