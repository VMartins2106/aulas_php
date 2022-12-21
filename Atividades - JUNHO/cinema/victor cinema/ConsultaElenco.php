<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consulta do Filme</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

	<style type="text/css">

		#tudo{		
			position: absolute;
			width: 600px;
			height: 600px;
			top: 50px;
			left: 50px;
			margin-left:530px;
			margin-top:50px;
		}

		body{
			background-image: url(imagematividade/fundo.png); 
			background-repeat: no-repeat; 
			background-size: 1950px 970px;
		}

</style>

</head>
<body>

	<div id="tudo">
    <?php
     require_once("conn.php");
     ?>
     <form action="ConsultaElenco.php"method="post">

     <select name="selectFilmes">

                           <option>Selecione</option>
                           <?php
                           
                                 $result_niveis_acessos= "SELECT * FROM tbfilme";
                                 $resultado_niveis_acesso=mysqli_query($conn,$result_niveis_acessos);
                                 while($row_niveis_acessos=mysqli_fetch_assoc($resultado_niveis_acesso)){?>
                                      <option value="<?php echo$row_niveis_acessos['codFilme'];?>"><?php echo$row_niveis_acessos['nomeFilme'];?></option>
                                      <?php

                                 }

                                 ?>
                      </select><br> <br>
                      <input type="submit"value="buscar">

</form>

<?php
error_reporting(0);
$cod = $_POST['selectFilmes'];
$resultado = mysqli_query($conn,"select tbFilme.nomeFilme,tbGeneroFilme.genero,tbDiretor.nomeDiretor from tbFilme,tbGeneroFilme,tbDiretor where tbGeneroFilme.codGenero=tbFilme.codGenero and tbDiretor.codDiretor= tbFilme.codDiretor and tbFilme.codFilme='".$cod."'");


while($linha = mysqli_fetch_array($resultado))
    {

    
            echo"<br> Filme:";
            echo$linha['nomeFilme'];
            echo"<br> Diretor:";
            echo$linha['nomeDiretor'];
            echo"<br> Gênero:";
            echo$linha['genero'];
            echo"<br>";

    $result=mysqli_query($conn,"select tbAtor.nomeAtor FROM tbAtor,tbAtorFilme where tbAtor.codAtor=tbAtorFilme.codAtor and
        tbAtorFilme.CodFilme='".$cod."'");
echo"<br> Elenco:<br>";
}
while($linha=mysqli_fetch_array($result))
    {
    
            
    
            echo$linha['nomeAtor'];
            echo"<br>";

    }

    ?>

		<br>
		<a href="index.html">Voltar ao inicio</a>
	</div>
</body>
</html>