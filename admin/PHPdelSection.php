<?php

	/* Limpeza de string */
	$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );

	/* Eliminar entrada do menu */
	$listaAntiga = file_get_contents("../lista.php");

	$listaNova = str_replace($_POST['li'], '', $listaAntiga);

	file_put_contents('../lista.php', $listaNova);

	/* Eliminar directorios com as imagens */

	$seccaoAntesSerLimpa = strtolower($_POST['nome']);

	$seccaoLimpa = strtr( $seccaoAntesSerLimpa, $unwanted_array );

	$seccaoLimpaLower = strtolower($seccaoLimpa);

	Delete("../images/transfers/" . $seccaoLimpaLower);

	/* Adicionar tabela à base de dados */

	include('../connectBD.php');

	$seccao = $_POST['nome'];

	$delTable = "DROP TABLE transfers_" . $seccao;

	if ($db->query($delTable) === TRUE) {
	    echo "Tabela eliminada com sucesso";
	} else {
	    echo "Erro: " . $delTable . "<br>" . $db->error;
	}

	$db->close();


 /* ==================================================
 				Função para apagar as pastas no servidor
		================================================== */

	function Delete($path){
	    if (is_dir($path) === true)
	    {
	        $files = array_diff(scandir($path), array('.', '..'));

	        foreach ($files as $file)
	        {
	            Delete(realpath($path) . '/' . $file);
	        }

	        return rmdir($path);
	    }

	    else if (is_file($path) === true)
	    {
	        return unlink($path);
	    }

	    return false;
	}

?>
