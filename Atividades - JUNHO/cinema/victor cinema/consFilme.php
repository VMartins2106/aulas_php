<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta do Filme</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<style type="text/css">

		#tudo{		
			position: absolute;
			width: 600px;
			height: 600px;
			top: 50px;
			left: 50px;
			margin-left:530px;
			margin-top:50px;
		}

		body{
			background-image: url(imagematividade/fundo.png); 
			background-repeat: no-repeat; 
			background-size: 1950px 970px;
		}

</style>

</head>
<body>

	<div id="tudo">
		<?php
			require_once('conn.php');
			$sql = mysqli_query($conn, "SELECT * FROM tbfilme");

			while($linha=mysqli_fetch_array($sql)){
				$cod=$linha['codFilme'];
				$nome=$linha['nomeFilme'];
				$ano=$linha['anoLancamento'];
				$codgen=$linha['codGenero'];
				$coddiretor=$linha['codDiretor'];
				echo "<br>";

				echo "<table><tr><td>Código do Filme: </td><td>$cod</td></tr>";
				echo "<tr><td>Nome do Filme: </td><td>$nome</td></tr>";
				echo "<tr><td>Ano de Lançamento do filme: </td><td>$ano</td></tr>";
				echo "<tr><td>Código do Gênero: </td><td>$codgen</td></tr>";
				echo "<tr><td>Código do Diretor: </td><td>$coddiretor</td></tr></table>";
			}
		?>

		<br>
		<a href="index.html">Voltar ao inicio</a>
	</div>
</body>
</html>