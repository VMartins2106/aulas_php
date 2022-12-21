<?php

require_once('conn.php');
	$nomeAl = $_POST['txtNome'];
	$anoAl = $_POST['txtAno'];

	$insere=mysqli_query($conn, "INSERT INTO tbator(nomeAtor, anoNascimento) values('$nomeAl', '$anoAl')") or die(mysqli_error());

	if(mysqli_affected_rows($conn) !=0){
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=ator.php'>
		<script type=\"text/javascript\">
			alert(\"Ator cadastrado com sucesso.\");
			</script>
		";
	}

	else{
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=ator.php'>
		<script type=\"text/javascript\">
			alert(\"Erro ao cadastrar.\");
			</script>
		";
		}
?>