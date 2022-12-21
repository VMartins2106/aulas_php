<?php

require_once('connec.php');
	$nomeV = $_POST['txtNome'];
	$telV = $_POST['txtTel'];
	$celV = $_POST['txtCel'];
	$emailV = $_POST['txtEmail'];

	$insere=mysqli_query($connec, "INSERT INTO Vendedor(nomeVendedor, telVendedor, celVendedor, emailVendedor) values('$nomeV', '$telV', '$celV', '$emailV')") or die(mysqli_error());

	if(mysqli_affected_rows($connec) !=0){
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadVendedor.php'>
		<script type=\"text/javascript\">
			alert(\"Cliente cadastrado com sucesso.\");
			</script>
		";
	}

	else{
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadVendedor.php'>
		<script type=\"text/javascript\">
			alert(\"Erro ao cadastrar.\");
			</script>
		";
		}
?>