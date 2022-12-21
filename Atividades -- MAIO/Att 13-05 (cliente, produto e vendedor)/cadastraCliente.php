<?php

require_once('connec.php');
	$nomeCl = $_POST['txtNome'];
	$endCl = $_POST['txtEnd'];
	$cepCl = $_POST['txtCep'];
	$telCl = $_POST['txtTel'];
	$celCl = $_POST['txtCel'];
	$emailCl = $_POST['txtEmail'];

	$insere=mysqli_query($connec, "INSERT INTO Cliente(nomeCliente, enderecoCliente, cepCliente, telCliente, celCliente, emailCliente) values('$nomeCl', '$endCl', '$cepCl', '$telCl', '$celCl', '$emailCl')") or die(mysqli_error());

	if(mysqli_affected_rows($connec) !=0){
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCliente.php'>
		<script type=\"text/javascript\">
			alert(\"Cliente cadastrado com sucesso.\");
			</script>
		";
	}

	else{
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadCliente.php'>
		<script type=\"text/javascript\">
			alert(\"Erro ao cadastrar.\");
			</script>
		";
		}
?>