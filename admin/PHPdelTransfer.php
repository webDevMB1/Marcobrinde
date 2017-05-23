<?php

	/* Limpeza de string */
	/*$unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );*/

	// Eliminar imagens

	/*$seccaoAntesSerLimpa = strtolower($_POST['seccao']);

	$seccaoLimpa = strtr( $seccaoAntesSerLimpa, $unwanted_array );

	$seccaoLimpaLower = strtolower($seccaoLimpa);*/

	/*$fileLink = "../images/transfers/" . $_POST['link'];
	$fileLinkDark = "../images/transfers/" . $_POST['linkDark'];

	if(file_exists($fileLink)){
		if(unlink($fileLink)){
			var_dump("true");
		}else{
			var_dump("false");
		}
	}else{
		var_dump("Não existe");
	}*/


	/*$old = getcwd(); // Grava directorio actual
  chdir("../images/transfers/");
	Delete($_POST['link']);
  chdir($old); // Volta ao directorio*/

	/* Adicionar tabela à base de dados */

	include('../connectBD.php');

	$delTransfer = "DELETE FROM transfers_". $_POST['seccao'] ." WHERE referencia LIKE '". $_POST['referencia'] ."'";

	if ($db->query($delTransfer) === TRUE) {
	    echo "Transfer eliminado com sucesso";
	} else {
	    echo "Erro: " . $delTransfer . "<br>" . $db->error;
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
