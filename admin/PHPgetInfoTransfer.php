<?php

	include('../connectBD.php');

	$ref = $_POST['referencia'];
	$seccao = $_POST['seccao'];

 	$sql = "SELECT nome, dimensoes, link, linkDark FROM transfers_" . $seccao . " WHERE referencia LIKE '". $ref ."'";
 	
 	$result = mysqli_query($db, $sql);

 	while($row = mysqli_fetch_array($result)){
 		echo $row['nome'] . ',' . $row['dimensoes'] . ',' . $row['link'] . ',' . $row['linkDark'];
 	}
 	
?>