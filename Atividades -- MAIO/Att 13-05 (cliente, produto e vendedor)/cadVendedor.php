<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro do Vendedor</title>
</head>
<body>
	<form action="cadastraVendedor.php" method="post">
		Nome do Vendedor:<br>
		<input type="text" name="txtNome"><br>
		<br>
		Telefone do Vendedor
		<input type="text" name="txtTel"><br>
		<br>
		Celular do Vendedor
		<input type="text" name="txtCel"><br>
		<br>
		Email do Vendedor
		<input type="text" name="txtEmail"><br><br>
		<input type="submit" name="btnCad" value="Cadastrar">
	</form>
	<br>
	<a href="index.php">Voltar ao inicio</a>	
</body>
</html>