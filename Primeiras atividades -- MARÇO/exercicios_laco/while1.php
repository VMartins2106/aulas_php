<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exemplo laço While</title>
</head>
<body>
	<?php
		$cont=0;
		while($cont<=10)
		{
			echo"$cont<br>";
			$cont = $cont+1;
			$cont++;
		}
	?>
</body>
</html>