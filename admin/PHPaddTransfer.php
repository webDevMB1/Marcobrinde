<?php
	
	include('../connectBD.php');

	$seccao = $_POST['seccao'];
	$nome = $_POST['nome'];
	$ref = $_POST['referencia'];
	$dim = $_POST['dimensoes'];
	$link = $_POST['link'];
	$linkDark = $_POST['linkDark'];

	$insertTransfer = "INSERT INTO `on26868r_lojamarcobrinde`.`transfers_". $seccao ."` ( `id` , `nome` , `referencia` , `dimensoes` , `link` , `linkDark` ) VALUES ( NULL , '". $nome ."', '". $ref ."', '". $dim ."', '". $link ."', '". $linkDark ."' )";

	if ($db->query($insertTransfer) === TRUE) {
	    echo "Transfer inserido com sucesso";
	} else {
	    echo "Erro: " . $insertTransfer . "<br>" . $db->error;
	}

	$db->close();

?>