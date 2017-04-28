<?php
	
	include('connectBD.php');

	$sql = "INSERT INTO `on26868r_lojamarcobrinde`.`numero_encomenda` (`id`, `cardinal`) VALUES (NULL, '#')";

	if ($db->query($sql) === TRUE) {
	    echo "Nova entrada efectuada com sucesso";
	} else {
	    echo "Erro: " . $sql . "<br>" . $db->error;
	}

	$db->close();

?>