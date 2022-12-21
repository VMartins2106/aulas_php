<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="exercicio3.php" method="post">

    <label>
    	Digite Numero1
    </label>
    <input type="txt" name="numero1">

     <label>
    	Digite Numero2
    </label>
    <input type="txt" name="numero2">

        <input type="submit" name="Enviar">

   	
   </form>

	<?php 

	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$a==0;

	 if ($numero1 < $numero2){
            $i = $numero1+1;

	 		while ($i<$numero2) {
				$a+=$i;
				$i++;
				echo "$i<br>";	 			
	 		}
	 		echo"A soma é igual a: $a<br>";
	 }
	 else{
	 	echo "O primeiro número tem que ser menor";
	 }

	 ?>

</body>
</html>