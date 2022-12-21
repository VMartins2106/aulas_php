<?php

    include_once("conn.php");
    $selator=$_POST['selectAtor'];
    $selFilme=$_POST['selectFilme'];

    $result_usuario ="INSERT INTO tbAtorFilme(codAtor,CodFilme)VALUES('$selator','$selFilme')";
    $resultado_usuario = mysqli_query($conn,$result_usuario);

    if(mysqli_affected_rows($conn)!=0){

                 echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastrarAtorFilme.php'>
                     <script type=\"text/javascript\">
                      alert(\"Ator cadastrado com Sucesso.\");
                     </script>";
            }

            else{
                    
                 echo"                             
                         
                     <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastrarAtorFilme.php'>
                     <script type=\"text/javascript\">
                          alert(\"O Usuario não foi cadastrado com Sucesso.\");
                     </script>
                     ";
            }

    ?>