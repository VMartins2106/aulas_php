<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<?php 
        $somatoria=0;

	 		while ($somatoria<1000) {
	 			$i=rand(0,100);
	 			$somatoria+=$i;
	 			echo "$i<br>";
	 		}
	 		echo "A soma é igual: $somatoria<br>";
	 		

	 		?>

</body>
</html>	