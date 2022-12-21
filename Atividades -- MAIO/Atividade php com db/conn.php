<?php
	$host = "localhost";
	$user = "id18677162_root";
	$pass = "7X*MWRp_wY-^j!}n";
	$banco = "id18677162_bdescolar";

	$conn = new mysqli ($host, $user, $pass, $banco);
	if ($conn->connect_error){
		die ("Falha na conexão: " .$conn->connect_error);
	}
?>