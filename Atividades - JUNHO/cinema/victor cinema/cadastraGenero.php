<?php

require_once('conn.php');
	$genAl = $_POST['txtGen'];

	$insere=mysqli_query($conn, "INSERT INTO tbgenerofilme(genero) values('$genAl')") or die(mysqli_error());

	if(mysqli_affected_rows($conn) !=0){
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=genero.php'>
		<script type=\"text/javascript\">
			alert(\"Gênero cadastrado com sucesso.\");
			</script>
		";
	}

	else{
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=genero.php'>
		<script type=\"text/javascript\">
			alert(\"Erro ao cadastrar.\");
			</script>
		";
		}
?>