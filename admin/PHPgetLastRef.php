<?php

	include('../connectBD.php');

	$seccao = $_POST['seccao'];

 	$sql = "SELECT referencia FROM transfers_" . $seccao . " ORDER BY id DESC LIMIT 1";
 	
 	$result = mysqli_query($db, $sql);


 	while($row = mysqli_fetch_array($result)){
 		echo $row['referencia'];
 	}
 	
?>