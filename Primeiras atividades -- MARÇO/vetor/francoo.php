<html>
        <head>
            <meta charset="utf-8">
            <title>Idade</title>
        </head>
          <body>
            
          	<?php

          		$cidade=array();

          		$cidade[0] = 'Franco da Rocha';
          		$cidade[1] = 'Mairiporã';
          		$cidade[2] = 'Franco da Rocha';
          		$cidade[3] = 'Francisco Morato';
          		$cidade[4] = 'Caieiras';

          		$c=0;


          		for ($i=0; $i<=4; $i++)
          		{
          			echo "A cidade $i é: ".$cidade[$i]."<br>";

          			if($cidade[$i]==$cidade[0] || $cidade[$i]==$cidade[2])
          			{
          				$c++;
          			}
          		}
          		echo "<br> Franco da Rocha aparece ".$c." vezes";
          	?>

           </body>
          </html>
            	