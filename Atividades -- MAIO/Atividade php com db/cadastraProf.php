<?php

		require_once('conn.php');

		$nomeProf = $_POST['txtNome'];

		$insete=mysqli_query($conn, "INSERT INTO tbprof(nomeProf) values('$nomeProf')") or die(mysqli_error($conn));

		echo "Cadastro efetuado com sucesso";
	

	if(mysqli_affected_rows($conn) !=0){
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProf.php'>
		<script type=\"text/javascript\">
			alert(\"Professor cadastrado com sucesso.\");
			</script>
		";
	}

	else{
		echo 
		"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadProf.php'>
		<script type=\"text/javascript\">
			alert(\"Erro ao cadastrar.\");
			</script>
		";
		}
?>