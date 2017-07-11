<?php

	include('connectBD.php');

	$sql = "SHOW TABLES LIKE 'transfers\_%'";

	$result = mysqli_query($db, $sql);

	while($row = mysqli_fetch_array($result)){
		$nomeTabelas[] = $row[0];
	}
	
	echo json_encode($nomeTabelas);
?>