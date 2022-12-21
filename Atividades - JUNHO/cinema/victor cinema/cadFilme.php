<?php

    include_once("conn.php");
    $nomeAl = $_POST['txtNome'];
	$anoAl = $_POST['txtAnoFilme'];
    $codGenero = $_POST['selectGenero'];
    $codDiretor = $_POST['selectDir'];

    $insere=mysqli_query($conn, "INSERT INTO tbfilme(nomeFilme, anoLancamento, codGenero, codDiretor) values('$nomeAl', '$anoAl', '$codGenero', '$codDiretor')") or die(mysqli_error());

    if(mysqli_affected_rows($conn) !=0){
                echo 
                "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=filme.php'>
                <script type=\"text/javascript\">
                    alert(\"Filme cadastrado com sucesso.\");
                    </script>
                ";
                }
            
    else{
                echo 
                "
                <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=filme.php'>
                <script type=\"text/javascript\">
                    alert(\"Erro ao cadastrar.\");
                    </script>
                ";
                }

    ?>