<?php
	DEFINE ('DB_USER', 'on26868r');
	DEFINE ('DB_PSWD', 'webDev2k17@marcobrinde');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_NAME', 'on26868r_lojamarcobrinde');

	$db = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME) or die('Impossivel connectar à base de dados'); 

	if(!$db){
		die('Erro ao ligar à base de dados');
	}
?>