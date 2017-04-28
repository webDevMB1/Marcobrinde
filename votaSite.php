<?php
	
	include('connectBD.php');

	$sql = "INSERT INTO `on26868r_lojamarcobrinde`.`votacao_website` (`id`, `estrelas`) VALUES (NULL, ". $_POST['votacao'] .")";

	if ($db->query($sql) === TRUE) {
	    echo "Nova entrada efectuada com sucesso";
	} else {
	    echo "Erro: " . $sql . "<br>" . $db->error;
	}

	$db->close();

?>