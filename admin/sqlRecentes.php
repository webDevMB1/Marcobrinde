<?php
	
	include('../connectBD.php');

	/* Iniciação var 1 */
	$nome1 = $_POST['nome1'];
	$referencia1 = $_POST['referencia1'];
	$tipo1 = $_POST['tipo1'];
	$dimensoes1 = $_POST['dimensoes1'];
	$link1 = $_POST['link1'];
	$linkDark1 = $_POST['linkDark1'];
	$linkRoupa1 = $_POST['linkRoupa1'];

	$update_values1 = array();
    if($nome1 != "")
        $update_values1[] = "nome='".$nome1."'";  
    if($referencia1 != "")
        $update_values1[] = "referencia='".$referencia1."'";
    if($tipo1 != "")
        $update_values1[] = "tipo='".$tipo1."'";
    if($dimensoes1 != "")
        $update_values1[] = "dimensoes='".$dimensoes1."'";
    if($link1 != "")
        $update_values1[] = "link='".$link1."'";
    if($linkDark1 != "")
        $update_values1[] = "linkDark='".$linkDark1."'";
    if($linkRoupa1 != "")
        $update_values1[] = "linkRoupa='".$linkRoupa1."'";

    $update1_values_imploded = implode(', ', $update_values1);

    /* ================================================================================================================================ */


	/* Iniciação var 2 */
	$nome2 = $_POST['nome2'];
	$referencia2 = $_POST['referencia2'];
	$tipo2 = $_POST['tipo2'];
	$dimensoes2 = $_POST['dimensoes2'];
	$link2 = $_POST['link2'];
	$linkDark2 = $_POST['linkDark2'];
	$linkRoupa2 = $_POST['linkRoupa2'];

	$update_values2 = array();
    if($nome2 != "")
        $update_values2[] = "nome='".$nome2."'";  
    if($referencia2 != "")
        $update_values2[] = "referencia='".$referencia2."'";
    if($tipo2 != "")
        $update_values2[] = "tipo='".$tipo2."'";
    if($dimensoes2 != "")
        $update_values2[] = "dimensoes='".$dimensoes2."'";
    if($link2 != "")
        $update_values2[] = "link='".$link2."'";
    if($linkDark2 != "")
        $update_values2[] = "linkDark='".$linkDark2."'";
    if($linkRoupa2 != "")
        $update_values2[] = "linkRoupa='".$linkRoupa2."'";

    $update2_values_imploded = implode(', ', $update_values2);

	/* ================================================================================================================================ */
	
	/* Iniciação var 3 */
	$nome3 = $_POST['nome3'];
	$referencia3 = $_POST['referencia3'];
	$tipo3 = $_POST['tipo3'];
	$dimensoes3 = $_POST['dimensoes3'];
	$link3 = $_POST['link3'];
	$linkDark3 = $_POST['linkDark3'];
	$linkRoupa3 = $_POST['linkRoupa3'];

	$update_values3 = array();
    if($nome3 != "")
        $update_values3[] = "nome='".$nome3."'";  
    if($referencia3 != "")
        $update_values3[] = "referencia='".$referencia3."'";
    if($tipo3 != "")
        $update_values3[] = "tipo='".$tipo3."'";
    if($dimensoes3 != "")
        $update_values3[] = "dimensoes='".$dimensoes3."'";
    if($link3 != "")
        $update_values3[] = "link='".$link3."'";
    if($linkDark3 != "")
        $update_values3[] = "linkDark='".$linkDark3."'";
    if($linkRoupa3 != "")
        $update_values3[] = "linkRoupa='".$linkRoupa3."'";

    $update3_values_imploded = implode(', ', $update_values3);

	/* ================================================================================================================================ */

	/* Iniciação var 4 */
	$nome4 = $_POST['nome4'];
	$referencia4 = $_POST['referencia4'];
	$tipo4 = $_POST['tipo4'];
	$dimensoes4 = $_POST['dimensoes4'];
	$link4 = $_POST['link4'];
	$linkDark4 = $_POST['linkDark4'];
	$linkRoupa4 = $_POST['linkRoupa4'];

	$update_values4 = array();
    if($nome4 != "")
        $update_values4[] = "nome='".$nome4."'";  
    if($referencia4 != "")
        $update_values4[] = "referencia='".$referencia4."'";
    if($tipo4 != "")
        $update_values4[] = "tipo='".$tipo4."'";
    if($dimensoes4 != "")
        $update_values4[] = "dimensoes='".$dimensoes4."'";
    if($link4 != "")
        $update_values4[] = "link='".$link4."'";
    if($linkDark4 != "")
        $update_values4[] = "linkDark='".$linkDark4."'";
    if($linkRoupa4 != "")
        $update_values4[] = "linkRoupa='".$linkRoupa4."'";

    $update4_values_imploded = implode(', ', $update_values4);

    /* ================================================================================================================================ */

        if( !empty($update_values1) ){
            $q1 = "UPDATE `on26868r_lojamarcobrinde`.`recentes_transfers` SET $update1_values_imploded WHERE `recentes_transfers`.`id` =4";
            $r1 = $db->query($q1);

            if($r1)
            {
                echo "<br>Informação adicionada com sucesso";

            }
        }

        if( !empty($update_values2) ){
        	$q2 = "UPDATE `on26868r_lojamarcobrinde`.`recentes_transfers` SET $update2_values_imploded WHERE `recentes_transfers`.`id` =3";
        	$r2 = $db->query($q2);

            if($r2)
            {
                echo "<br>Informação adicionada com sucesso";

            }
        }

        if( !empty($update_values3) ){
        	$q3 = "UPDATE `on26868r_lojamarcobrinde`.`recentes_transfers` SET $update3_values_imploded WHERE `recentes_transfers`.`id` =2";
        	$r3 = $db->query($q3);

            if($r3)
            {
                echo "<br>Informação adicionada com sucesso";

            }
        }

        if( !empty($update_values4) ){
        	$q4 = "UPDATE `on26868r_lojamarcobrinde`.`recentes_transfers` SET $update4_values_imploded WHERE `recentes_transfers`.`id` =1";
        	$r4 = $db->query($q4);

            if($r4)
            {
                echo "<br>Informação adicionada com sucesso";

            }
        }



        /* Adicionar imagens */



	$db->close();


?>