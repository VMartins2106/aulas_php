<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta do Cliente</title>
</head>
<body>

	<?php
		require_once('connec.php');
		$sql = mysqli_query($connec, "SELECT * FROM Cliente");

		while($linha=mysqli_fetch_array($sql)){
			$cod=$linha['codCliente'];
			$nome=$linha['nomeCliente'];
			$end=$linha['enderecoCliente'];
			$cep=$linha['cepCliente'];
			$tel=$linha['telCliente'];
			$cel=$linha['celCliente'];
			$email=$linha['emailCliente'];
			echo "<br>";

			echo "<table><tr><td>Código do Cliente: </td><td>$cod</td></tr>";
			echo "<tr><td>Nome do Cliente: </td><td>$nome</td></tr>";
			echo "<tr><td>Endereço do Cliente: </td><td>$end</td></tr>";
			echo "<tr><td>Cep do Cliente: </td><td>$cep</td></tr>";
			echo "<tr><td>Telefone do Cliente: </td><td>$tel</td></tr>";
			echo "<tr><td>Celular do Cliente: </td><td>$cel</td></tr>";
			echo "<tr><td>Email do Cliente: </td><td>$email</td></tr></table>";
		}
	?>

	<br>
	<a href="index.php">Voltar ao inicio</a>
</body>
</html>