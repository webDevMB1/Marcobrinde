<?php
	
	/* Limpeza de string */
	$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
	/* /Limpeza de string */

	/*------ Adicionar nova entrada ao menu */	
	$listaAntiga = file_get_contents("../lista.php");

	$add = "<li id=\"li". ucfirst($_POST['nome']) ."\"><a href=\"#\" onclick=\"changeGaleria('". strtolower($_POST['nome']) ."')\">". $_POST['nome'] ."</a></li>";

	$listaNova = $listaAntiga . $add;

	file_put_contents('../lista.php', $listaNova);

	/* Adicionar directorios para as imagens */

	$seccaoAntesSerLimpa = strtolower($_POST['nome']);

	$seccaoLimpa = strtr( $seccaoAntesSerLimpa, $unwanted_array );

	//$seccaoLimpaLower = strtolower($seccaoLimpa);

	mkdir("../images/transfers/". $seccaoLimpa ."");

	mkdir("../images/transfers/". $seccaoLimpa ."/light");
	mkdir("../images/transfers/". $seccaoLimpa ."/dark");
	mkdir("../images/transfers/". $seccaoLimpa ."/DR");

	/* Adicionar tabela à base de dados */

	include('../connectBD.php');

	$createTable = "CREATE TABLE transfers_". $seccaoLimpa ." (id int( 10 ) , nome varchar( 50 ) , referencia varchar( 50 ) , dimensoes varchar( 50 ) , link varchar( 150 ) , linkDark varchar( 150 ) )";

	if ($db->query($createTable) === TRUE) {
	    echo "Tabela criada com sucesso";
	} else {
	    echo "Erro: " . $createTable . "<br>" . $db->error;
	}

	$db->close();

?>