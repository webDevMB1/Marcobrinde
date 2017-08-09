<?php
 	include('connectBD.php');

 	//SQL para contar quantos transfers existem na tabela - count linhas

 	$sqlCountLinhas = ("SELECT COUNT(id) FROM transfers_" . $_COOKIE['seccao']);
 	$resultQueryCount = mysqli_query($db, $sqlCountLinhas);

 	$countLinhas = mysqli_fetch_array($resultQueryCount, MYSQLI_NUM);

 	$quantDivsTransfers = floor($countLinhas[0] / 60 + 1); //quantidade de páginas necessárias - cada página leva 60 transfers


 	$sql = $_POST['SQL'];

 	$result = mysqli_query($db, $sql);

 	$linha4 = 1;
 	$pastaImgs = "";
 	$range = 1;

 	$counterTransfers = 0;
 	$counterPages = 1;
 	$initCounter = 1;

 	while($row = mysqli_fetch_array($result)){

 		$seccao = strtolower(explode("-", $row['referencia'])[1]);

 		// Verificação casos especiais
 		// Para alterar a imagem de fundo atrás do transfer

 		if($seccao == "criancas"){
 			$pastaImgs = "1RC";
 			$range = rand(1, 8);
 		}else if($row['referencia'] == "MB-Moncao-#0005" || $row['referencia'] == "MB-Moncao-#0006" || $row['referencia'] == "MB-Moncao-#0007" || $row['referencia'] == "MB-Moncao-#0008"){ // especial feira alvarinho
 			$pastaImgs = "1R";
 			$range = 19;
 		}else if($row['referencia'] == "MB-Moncao-#0001" || $row['referencia'] == "MB-Moncao-#0002" || $row['referencia'] == "MB-Moncao-#0003" || $row['referencia'] == "MB-Moncao-#0004"){ // especial feira foda
 			$pastaImgs = "1R";
 			$range = 20;
 		}else {
 			$pastaImgs = "1R";
 			$range = rand(1, 18);
 		}


 		// Verifica link Dark

 		if($row['linkDark'] != "" ){
				$secondVersion = $row['linkDark'];
			}else{
				$secondVersion = "";
			}

			//Adicionar pagina nova

		echo '<div class="page'. $counterPages .'" class="pagesTransfers">';

	 		if($linha4 == 1){
	 			echo '<div class="bottom-product">';
			 		echo '<div class="col-md-3 bottom-cd simpleCart_shelfItem">';
			 			echo '<div class="product-at">';
			 				echo '<a href="#" onclick="$.cookie(\'seccao\', \''. $seccao .'\'); setLocalArtigo(\''. $seccao . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')"><img style="background: url(images/transfers/'. $pastaImgs .'/'. $range .'.jpg); background-position: center -30px; background-size: 140%" class="img-responsive" src="images/transfers/'. $seccao .'/' . $row['link'] . '" alt="">';
			 					echo '<div class="pro-grid"><span class="buy-in">Comprar</span></div>';
			 				echo '</a>';
			 				echo '<center><p style="margin-bottom: 50px"><span>' . $row['nome'] . '</span><br>' . $row['referencia'] . '</p></center>';
			 			echo '</div>';
		 			echo '</div>';
		 		$linha4++;
		 		$counterTransfers++;
	 		}else if($linha4 == 2){
	 			echo '<div class="col-md-3 bottom-cd simpleCart_shelfItem">';
			 			echo '<div class="product-at ">';
			 				echo '<a href="#" onclick="$.cookie(\'seccao\', \''. $seccao .'\'); setLocalArtigo(\''. $seccao . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')"><img style="background: url(images/transfers/'. $pastaImgs .'/'. $range .'.jpg); background-position: center -30px; background-size: 140%" class="img-responsive" src="images/transfers/'. $seccao .'/' . $row['link'] . '" alt="">';
			 					echo '<div class="pro-grid"><span class="buy-in">Comprar</span></div>';
			 				echo '</a>';
			 				echo '<center><p style="margin-bottom: 50px"><span>'. $row['nome'] . '</span><br>' . $row['referencia'] . '</p></center>';
			 			echo '</div>';
		 			echo '</div>';
	 			$linha4++;
	 			$counterTransfers++;
	 		}else if($linha4 == 3){
	 					echo '<div class="col-md-3 bottom-cd simpleCart_shelfItem">';
			 			echo '<div class="product-at ">';
			 				echo '<a href="#" onclick="$.cookie(\'seccao\', \''. $seccao .'\'); setLocalArtigo(\''. $seccao . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')"><img style="background: url(images/transfers/'. $pastaImgs .'/'. $range .'.jpg); background-position: center -30px; background-size: 140%" class="img-responsive" src="images/transfers/'. $seccao .'/' . $row['link'] . '" alt="">';
			 					echo '<div class="pro-grid"><span class="buy-in">Comprar</span></div>';
			 				echo '</a>';
			 				echo '<center><p style="margin-bottom: 50px"><span>'. $row['nome'] . '</span><br>' . $row['referencia'] . '</p></center>';
			 			echo '</div>';
		 			echo '</div>';
	 			$linha4++;
	 			$counterTransfers++;
	 		}else{
	 			echo '<div class="col-md-3 bottom-cd simpleCart_shelfItem">';
				 			echo '<div class="product-at ">';
				 				echo '<a href="#" onclick="$.cookie(\'seccao\', \''. $seccao .'\'); setLocalArtigo(\''. $seccao . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')"><img style="background: url(images/transfers/'. $pastaImgs .'/'. $range .'.jpg); background-position: center -30px; background-size: 140%" class="img-responsive" src="images/transfers/'. $seccao . '/' . $row['link'] . '" alt="">';
				 					echo '<div class="pro-grid"><span class="buy-in">Comprar</span></div>';
				 				echo '</a>';
				 				echo '<center><p style="margin-bottom: 50px"><span>' . $row['nome'] . '</span><br>' . $row['referencia'] . '</p></center>';
				 			echo '</div>';
			 			echo '</div>';
	 				echo '</div>';
		 		echo '<div class="clearfix"> </div>';
	 			$linha4 = 1;
	 			$counterTransfers++;
	 		}

		echo '</div>';
	 		
 		if(is_int($counterTransfers/60)){
 			$counterPages++;
 		}

 	} // /while

 	echo '</div>';
 	echo '<div class="row"></div>';

 	echo "<center><div id=\"pageSelector\">";
		while($initCounter < $counterPages + 1){
			echo "<a id=\"button". $initCounter ."\" style=\"padding-left: 10px; padding-left: 10px;\"class=\"pagesButtons\" href=\"#\" onclick=\"mudaPaginaTransfers(". $initCounter .");\"><span> ". $initCounter ." </span></a>";
			$initCounter++;
		}
	echo "</div></center>"; // //pageSelector

	
?>