<?php
				 	include('connectBD.php');

				 	$result = mysqli_query($db, $_POST['SQL']);

				 	$linha3 = 1;

				 	while($row = mysqli_fetch_array($result)){
				 		if($linha3 == 1){
				 			echo '<div class="bottom-product">';
						 		echo '<div class="col-md-4 bottom-cd simpleCart_shelfItem">';
						 			echo '<div class="product-at">';
						 				echo '<a href="#" onclick="setLocalArtigo(\''. $_COOKIE['seccao'] . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\')"><img class="img-responsive" src="images/transfers/'. $_COOKIE['seccao'] .'/' . $row['link'] . '" alt="">';
						 					echo '<div class="pro-grid"><span class="buy-in">Comprar</span></div>';
						 				echo '</a>';
						 				echo '<center><p><span>' . $row['nome'] . '</span><br>' . $row['referencia'] . '</p></center>';
						 			echo '</div>';
					 			echo '</div>';
					 		$linha3++;
				 		}else if($linha3 == 2){
				 			echo '<div class="col-md-4 bottom-cd simpleCart_shelfItem">';
						 			echo '<div class="product-at ">';
						 				echo '<a href="#" onclick="setLocalArtigo(\''. $_COOKIE['seccao'] . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\')"><img class="img-responsive" src="images/transfers/'. $_COOKIE['seccao'] .'/' . $row['link'] . '" alt="">';
						 					echo '<div class="pro-grid"><span class="buy-in">Comprar</span></div>';
						 				echo '</a>';
						 				echo '<center><p><span>'. $row['nome'] . '</span><br>' . $row['referencia'] . '</p></center>';
						 			echo '</div>';
					 			echo '</div>';
				 			$linha3++;
				 		}else{
				 					echo '<div class="col-md-4 bottom-cd simpleCart_shelfItem">';
							 			echo '<div class="product-at ">';
							 				echo '<a href="#" onclick="setLocalArtigo(\''. $_COOKIE['seccao'] . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\')"><img class="img-responsive" src="images/transfers/'. $_COOKIE['seccao'] . '/' . $row['link'] . '" alt="">';
							 					echo '<div class="pro-grid"><span class="buy-in">Comprar</span></div>';
							 				echo '</a>';
							 				echo '<center><p><span>' . $row['nome'] . '</span><br>' . $row['referencia'] . '</p></center>';
							 			echo '</div>';
						 			echo '</div>';
				 				echo '</div>';
					 		echo '<div class="clearfix"> </div>';
				 			$linha3 = 1;
				 		}
				 	}
				?>