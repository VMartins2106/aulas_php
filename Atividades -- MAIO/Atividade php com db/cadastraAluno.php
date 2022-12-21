<?php

require_once('conn.php');
	$nomeAl = $_POST['txtNome'];

	$insere=mysqli_query($conn, "INSERT INTO tbaluno(nomeAluno) values('$nomeAl')") or die(mysqli_error());

	if(mysqli_affected_rows($conn) !=0){
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAluno.php'>
		<script type=\"text/javascript\">
			alert(\"Aluno cadastrado com sucesso.\");
			</script>
		";
	}

	else{
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadAluno.php'>
		<script type=\"text/javascript\">
			alert(\"Erro ao cadastrar.\");
			</script>
		";
		}
?>