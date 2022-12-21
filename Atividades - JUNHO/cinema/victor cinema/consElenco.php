<html>
<body>
     <?php
     require_once("conn.php");
     ?>
     <form action="ConsultaFilme.php"method="post">

     <select name="selectFilmes">

                           <option>Selecione</option>
                           <?php
                           
                                 $result_niveis_acessos= "SELECT * FROM tbfilme";
                                 $resultado_niveis_acesso=mysqli_query($conn,$result_niveis_acessos);
                                 while($row_niveis_acessos=mysqli_fetch_assoc($resultado_niveis_acesso)){?>
                                      <option value="<?php echo$row_niveis_acessos['codFilme'];?>"><?php echo$row_niveis_acessos['NomeFilme'];?></option>
                                      <?php

                                 }

                                 ?>
                      </select><br> <br>
                      <input type="submit"value="buscar">

</form>

<?php

$cod = $_POST['selectFilmes'];
$resultado = mysqli_query($conn,"select tbFilme.filme,tbGeneroFilme.generoFilme,tbDiretorFilme.nomeDiretor from
    tbFilme,tbGeneroFilme,tbDiretorFilme where tbGeneroFilme.codGeneroFilme=tbFilme.codGenero and tbDiretorFilme.codDiretorFilme=
    tbFilme.codDiretor and tbFilme.codFilme='".$cod."'");


while($linha = mysqli_fetch_array($resultado))
    {

    
            echo"<br> Filme:";
            echo$linha['filme'];
            echo"<br> Diretor:";
            echo$linha['nomeDiretor'];
            echo"<br> Gênero:";
            echo$linha['generoFilme'];
            echo"<br>";

    $result=mysqli_query($conn,"select tbAtor.ator FROM tbAtor,tbAtorFilme where tbAtor.codAtor=tbAtorFilme.codAtor and
        tbAtorFilme.Cod Filme='".$cod."'");
echo"<br> Elenco:<br>";
}
while($linha=mysqli_fetch_array($result))
    {
    
            
    
            echo$linha['ator'];
            echo"<br>";

    }

    ?>

</body>
</html>