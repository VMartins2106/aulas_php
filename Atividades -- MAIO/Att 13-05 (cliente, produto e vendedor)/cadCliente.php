<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro do Cliente</title>
</head>
<body>
	<form action="cadastraCliente.php" method="post">
		Nome do Cliente:<br>
		<input type="text" name="txtNome"><br>
		<br>
		Endereço do Cliente
		<input type="text" name="txtEnd"><br>
		<br>
		Cep do Cliente
		<input type="text" name="txtCep"><br>
		<br>
		Telefone do Cliente
		<input type="text" name="txtTel"><br>
		<br>
		Celular do Cliente
		<input type="text" name="txtCel"><br>
		<br>
		Email do Cliente
		<input type="text" name="txtEmail"><br><br>
		<input type="submit" name="btnCad" value="Cadastrar">
	</form>
	<br>
	<a href="index.php">Voltar ao inicio</a>	
</body>
</html>