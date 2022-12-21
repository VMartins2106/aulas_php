<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="index.php" metod="post">
		Nome Animal:<br>
		<input type="text" name="txtNome">
		<br>
		<select name="selectTipo">
					<option>Selecione o tipo do animal</option>
						<?php
	                        require_once ("conn.php");
							$seleciona = "SELECT * FROM tbtipoanimal";
							$selecionaTipo = mysqli_query($conn, $seleciona);
							while($row_tipo = mysqli_fetch_assoc($selecionaTipo)){ ?>
								<option value="<?php echo $row_tipo['CodTipo']; ?>"><?php echo $row_tipo['TipoAnimal']; ?></option> <?php
						}
					?>
		</select>
		<br>
		<select name="selectResp">
					<option>Selecione o responsavel pelo animal</option>
						<?php
	                        require_once ("conn.php");
							$seleciona = "SELECT * FROM tbresponsavel";
							$selecionaResp = mysqli_query($conn, $seleciona);
							while($row_resp = mysqli_fetch_assoc($selecionaResp)){ ?>
								<option value="<?php echo $row_resp['CodResp']; ?>"><?php echo $row_resp['NomeResp']; ?></option> <?php
						}
					?>
		</select>
		<br>
		<select name="selectRaca">
					<option>Selecione a raça do animal</option>
						<?php
	                        require_once ("conn.php");
							$seleciona = "SELECT * FROM tbracaanimal";
							$selecionaRaca = mysqli_query($conn, $seleciona);
							while($row_raca = mysqli_fetch_assoc($selecionaRaca)){ ?>
								<option value="<?php echo $row_raca['CodRaca']; ?>"><?php echo $row_raca['RacaAnimal']; ?></option> <?php
						}
					?>
		</select>		
		<br>
		<select name="selectAnimal">
					<option>Selecione o animal</option>
						<?php
	                        require_once ("conn.php");
							$seleciona = "SELECT * FROM tbanimal";
							$selecionaAnimal = mysqli_query($conn, $seleciona);
							while($row_animal = mysqli_fetch_assoc($selecionaAnimal)){ ?>
								<option value="<?php echo $row_animal['CodAnimal']; ?>"><?php echo $row_animal['NomeAnimal']; ?></option> <?php
						}
					?>
		</select>
		<br>
		<select name="selectAtendimento">
					<option>Selecione o atendimento</option>
						<?php
	                        require_once ("conn.php");
							$seleciona = "SELECT * FROM tbatendimento";
							$selecionaAtendimento = mysqli_query($conn, $seleciona);
							while($row_atendimento = mysqli_fetch_assoc($selecionaAtendimento)){ ?>
								<option value="<?php echo $row_atendimento['CodAtendimento']; ?>"><?php echo $row_atendimento['CodAnimal']; ?></option> <?php
						}
					?>
		</select>
		<input type="submit" value="Cadastrar" name="btnCad">		 
	</form>

	<?php

		$codTipo = $_POST['selectTipo'];
		$codResp = $_POST['selectResp'];
		$codRaca = $_POST['selectRaca'];
		$codAnimal = $_POST['selectAnimal'];
		$codAtendimento = $_POST['selectAtendimento'];

		echo "O código do tipo escolhido é: $codTipo<br>";
		echo "O código do responsavel escolhido é: $codResp<br>";
		echo "O código da raça escolhida é: $codRaca<br>";
		echo "O código do animal escolhido é: $codAnimal<br>";
		echo "O código do atendimento escolhido é: $codAtendimento";

	?>

</body>
</html>