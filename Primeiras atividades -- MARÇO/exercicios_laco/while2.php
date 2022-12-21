<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exemplo copa do mundo</title>
</head>
<body>
	<?php
		$cont=1930;
		while($cont<=2022)
		{
			if(($cont==1942) || ($cont==1946)){
				echo"$cont";
				echo' Este ano não teve copa do mundo!<br>';
				$cont+=4;
			}
			else{
			echo"$cont<br>";
			$cont+=4;
			}
		}
	?>
</body>
</html>