<?php

require_once('connec.php');
	$nomeP = $_POST['txtNome'];
	$qtdP = $_POST['txtQtd'];
	$preP = $_POST['txtPre'];

	$insere=mysqli_query($connec, "INSERT INTO Produto(nomeProduto, qtdeEstoque, precoProduto) values('$nomeP', '$qtdP', '$preP')") or die(mysqli_error());

	if(mysqli_affected_rows($connec) !=0){
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProduto.php'>
		<script type=\"text/javascript\">
			alert(\"Cliente cadastrado com sucesso.\");
			</script>
		";
	}

	else{
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProduto.php'>
		<script type=\"text/javascript\">
			alert(\"Erro ao cadastrar.\");
			</script>
		";
		}
?>