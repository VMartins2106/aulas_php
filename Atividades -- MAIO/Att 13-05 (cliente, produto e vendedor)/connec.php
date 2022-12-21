<?php
	$host = "localhost";
	$user = "id18677162_root";
	$pass = "7X*MWRp_wY-^j!}n";
	$banco = "id18677162_bdescolar";

	$connec = new mysqli ($host, $user, $pass, $banco);
	if ($connec->connect_error){
		die ("Falha na conexão: " .$connec->connect_error);
	}
?>