<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta do Vendedor</title>
</head>
<body>

	<?php
		require_once('connec.php');
		$sql = mysqli_query($connec, "SELECT * FROM Vendedor");

		while($linha=mysqli_fetch_array($sql)){
			$cod=$linha['codVendedor'];
			$nome=$linha['nomeVendedor'];
			$tel=$linha['telVendedor'];
			$cel=$linha['celVendedor'];
			$email=$linha['emailVendedor'];
			echo "<br>";

			echo "<table><tr><td>Código do Vendedor: </td><td>$cod</td></tr>";
			echo "<tr><td>Nome do Vendedor: </td><td>$nome</td></tr>";
			echo "<tr><td>Telefone do Vendedor: </td><td>$tel</td></tr>";
			echo "<tr><td>Celular do Vendedor: </td><td>$cel</td></tr>";
			echo "<tr><td>Email do Vendedor: </td><td>$email</td></tr></table>";
		}
	?>

	<br>
	<a href="index.php">Voltar ao inicio</a>
</body>
</html>