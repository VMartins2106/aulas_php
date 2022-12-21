<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exemplo FOR</title>
</head>
<body>
	<form action="for2.php" method="post">

		<select name="cop">
			<?php
				$i=1930;
				while ($i <= 2022) {
					echo "<option value=" .$i.">".$i."</option>";
					$i+=4;
				}
			?>
		</select>
		<br>
		<input type="submit" value="Enviar">
	</form> 
	<?php
		$copa = $_POST['cop'];

			switch ($copa) {
				case 1930:
					echo "Campeão: Uruguai<br>	";
					echo "Sede: Uruguai";
					break;
				
				case 1934:
					echo "Campeão: Itália<br>	";
					echo "Sede: Itália";
					break;				

				case 1938:
					echo "Campeão: Itália<br>	";
					echo "Sede: Itália";
					break;				

				case 1942:
					echo "Não teve copa<br>	";
					break;				

				case 1946:
					echo "Não teve copa<br>	";			
					break;				

				case 1950:
					echo "Campeão: Uruguai<br>	";
					echo "Sede: Itália";
					break;

				case 1954:
					echo "Campeão: Alemanha<br>	";
					echo "Sede: Itália";
					break;

				case 1958:
					echo "Campeão: Brasil<br>	";
					echo "Sede: Itália";
					break;				

				case 1962:
					echo "Campeão: Brasil<br>	";
					echo "Sede: Itália";
					break;

				case 1966:
					echo "Campeão: Inglaterra<br>	";
					echo "Sede: Itália";
					break;

				case 1970:
					echo "Campeão: Brasil<br>	";
					echo "Sede: Itália";
					break;

				case 1974:
					echo "Campeão: Alemanha<br>	";
					echo "Sede: Itália";
					break;

				case 1978:
					echo "Campeão: Argentina<br>	";
					echo "Sede: Itália";
					break;

				case 1982:
					echo "Campeão: Itália<br>	";
					echo "Sede: Itália";
					break;
					
				case 1986:
					echo "Campeão: Argentina<br>	";
					echo "Sede: Itália";
					break;
					
				case 1990:
					echo "Campeão: Alemanha<br>	";
					echo "Sede: Itália";
					break;
					
				case 1994:
					echo "Campeão: Brasil<br>	";
					echo "Sede: Itália";
					break;						

				case 1998:
					echo "Campeão: França<br>	";
					echo "Sede: Itália";
					break;				

				case 2002:
					echo "Campeão: Brasil<br>	";
					echo "Sede: Itália";
					break;

				case 2006:
					echo "Campeão: Itália<br>	";
					echo "Sede: Itália";
					break;

				case 2010:
					echo "Campeão: Espanha<br>	";
					echo "Sede: Itália";
					break;

				case 2014:
					echo "Campeão: Alemanha	<br>	";
					echo "Sede: Itália";
					break;

				case 2018:
					echo "Campeão: França<br>	";
					echo "Sede: Itália";
					break;				

				case 2022:
					echo "Campeão: Itália<br>	";
					echo "Sede: Itália";
					break;

				default:
					echo "Escolha um ano!";
					break;
			}

	?>	
</body>
</html> 