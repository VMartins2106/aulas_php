<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="exercicio4.php" method="post">

    <label>
        Digite o número 1
    </label>
    <input type="txt" name="numero1">

     <label>
        Digite número 2
    </label>
    <input type="txt" name="numero2">

        <input type="submit" name="Enviar">

   </form>

   <?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    for ($i=$numero1+1; $i<$numero2 ; $i++) { 
        if ($i %2 == 0) {
            echo "$i<br>"; 
        }
    }
    ?>
    
</body>
</html>
