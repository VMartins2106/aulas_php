<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro do Produto</title>
</head>
<body>
	<form action="cadastraProduto.php" method="post">
		Nome do Produto:<br>
		<input type="text" name="txtNome"><br>
		<br>
		Quantidade em Estoque
		<input type="text" name="txtQtd"><br>
		<br>
		Preço do Produto
		<input type="text" name="txtPre"><br><br>		
		<input type="submit" name="btnCad" value="Cadastrar">
	</form>
	<br>
	<a href="index.php">Voltar ao inicio</a>	
</body>
</html>