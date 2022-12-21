<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exemplo FOR</title>
</head>
<body>
	Anos de Olimpíadas:</br>
	<?php
	for ($i=1896; $i <=2024 ; $i+=4) { 

 		if(($i!=1896) && ($i!=1940) && ($i!=1944)){
 			echo "$i<br>";
 		}
	}
	?>
</body>
</html> 