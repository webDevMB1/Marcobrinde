<div class="footer w3layouts">
	<div class="container">
		<div class="footer-top-at marginsFooter">
			<div class="col-md-3 amet-sed w3l">
			<h4>MAIS INFORMAÇÃO</h4>
			<ul class="nav-bottom">
				<li><a href="info.php">Compras</a></li>
				<li><a href="guiaTamanhos.php">Guia Tamanhos</a></li>
				<li><a href="lavagem.php">Instruções de Lavagem</a></li>
			</ul>	
			</div>
			<div class="col-md-3 amet-sed agileits-w3layouts">
				<a id="contactoFooter" href="contact.php"><h4>CONTACTE-NOS</h4></a>
				<p>Zona Industrial da Lagoa</p>
				<p>4950-850 Cortes Monção</p>
				<p>Telefone: 251 654 317</p>
			</div>
			<div id="vota" class="col-md-3 amet-sed agileits-w3layouts"></div>
			<div id="vota" class="col-md-3 amet-sed agileits-w3layouts">
				<h4>Avaliação do Site</h4>
				<div style="margin-left: 6%; margin-right: 12%">
				
				<?php
					include('connectBD.php');

				 	$sqlVotacao = "SELECT estrelas, COUNT( * ) AS count FROM votacao_website GROUP BY estrelas DESC";
				 	$resultVotacao = mysqli_query($db, $sqlVotacao);

				 	$estrelas = 5;

				 	while($row = mysqli_fetch_array($resultVotacao)){

				 		if($estrelas == 5){
				 			desenha(5, $row['count']);
				 			$estrelas--;
				 		}else if($estrelas == 4){
				 			desenha(4, $row['count']);
				 			$estrelas--;
				 		}else if($estrelas == 3){
				 			desenha(3, $row['count']);
				 			$estrelas--;
				 		}else if($estrelas == 2){
				 			desenha(2, $row['count']);
				 			$estrelas--;
				 		}else if($estrelas == 1){
				 			desenha(1, $row['count']);
				 			$estrelas--;
				 		}
				 	}

				 	function desenha($desenhaEstrela, $rowCount){
				 		echo '<div class="row"><img src="images/votes'. $desenhaEstrela .'.png" style="max-width: 30%"> <p style="font-size: 12px; float: right">'. intval($rowCount-1) .'</p></div>';
				 	}
				?>
				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

		<div class="footer-class w3-agile">
		<!-- <p>© 2017 CRESPO'S . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> | Developed by <a href="">Web Dep - MarcoBrinde</a></p> -->
			<p>© 2017 MarcoBrinde</p> <!--| Developed by <a href="http://www.marcobrinde.com">Web Dep - MarcoBrinde</a>-->
		</div>
</div>