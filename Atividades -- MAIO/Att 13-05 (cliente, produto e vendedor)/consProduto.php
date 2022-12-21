<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta do Produto</title>
</head>
<body>

	<?php
		require_once('connec.php');
		$sql = mysqli_query($connec, "SELECT * FROM Produto");

		while($linha=mysqli_fetch_array($sql)){
			$cod=$linha['codProduto'];
			$nome=$linha['nomeProduto'];
			$qtd=$linha['qtdeEstoque'];
			$pre=$linha['precoProduto'];
			echo "<br>";

			echo "<table><tr><td>Código do Produto: </td><td>$cod</td></tr>";
			echo "<tr><td>Nome do Produto: </td><td>$nome</td></tr>";
			echo "<tr><td>Quantidade do Produto: </td><td>$qtd</td></tr>";
			echo "<tr><td>Preço do Produto: </td><td>$pre</td></tr></table>";
		}
	?>

	<br>
	<a href="index.php">Voltar ao inicio</a>
</body>
</html>