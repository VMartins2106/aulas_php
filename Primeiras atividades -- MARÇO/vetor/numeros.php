<html>
        <head>
            <meta charset="utf-8">
            <title>Números</title>
        </head>
          <body bgcolor="lighgreen">
            
            <?php

                $n=array();

                $n[0] = 7;
                $n[1] = 10;
                $n[2] = 22;
                $n[3] = 2;
                $n[4] = 20;
                $n[5] = 2;
                $n[6] = 9;
                $n[7] = 24;
                $n[8] = 4;
                $n[9] = 6;
                $n[10] = 3;
                $n[11] = 25;
                $n[12] = 0;
                $n[13] = 18;
                $n[14] = 1;

                $c=0;

                for ($i=0; $i<=14; $i++)
                {
                    echo "O número $i é: ".$n[$i]."<br>";
                }

                    if($n[$i]>10)
                    {
                        echo "O número é maior que 10.";
                    }
                echo "<br> Temos um total de : ".$c." números maiores que 10!";
            ?>

           </body>
          </html>
                