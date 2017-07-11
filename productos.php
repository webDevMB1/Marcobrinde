<!DOCTYPE html>
<html>
<head>
<title>MarcoBrinde Loja Online - Produtos</title>
<link rel="icon" href="images/logo/icon.png" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessario para Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="MarcoBrinde Loja Online Website Roupa Desenhos Personalizados" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/simpleCart.min.js"> </script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93279007-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<style>
	.pagesButtons{
		text-decoration: none;
	}

	.pagesButtons span{
		padding: 5px 15px; 
		color: black; 
		border: 1px solid black; 
		background-color: #F9F9F9;
	}

	.pagesButtons span:hover{
		color: white; 
		border: 1px solid black; 
		background-color: #0A0A0A;
	}

	.buttonActive span{
		color: white; 
		border: 1px solid black; 
		background-color: #464646;	
	}
</style>
<body>

<?php

	require_once('header.php');
?>

<!-- products -->
	<div class="pro-du">
		<div class="container">

			<!-- Area destinada aos transfers -->
			<div id="areaTransfers" class="col-md-12 product1">

				<?php
				 	include('connectBD.php');

				 	//SQL para contar quantos transfers existem na tabela - count linhas

				 	$sqlCountLinhas = ("SELECT COUNT(id) FROM transfers_" . $_COOKIE['seccao']);
				 	$resultQueryCount = mysqli_query($db, $sqlCountLinhas);

				 	$countLinhas = mysqli_fetch_array($resultQueryCount, MYSQLI_NUM);

				 	$quantDivsTransfers = floor($countLinhas[0] / 60 + 1); //quantidade de páginas necessárias - cada página leva 60 transfers


				 	$sql = "SELECT * FROM transfers_" . $_COOKIE['seccao'] . " ORDER BY id DESC";

				 	$result = mysqli_query($db, $sql);

				 	$linha4 = 1;
				 	$pastaImgs = "";
				 	$range = 1;

				 	$counterTransfers = 0;
				 	$counterPages = 1;
				 	$initCounter = 1;

				 	while($row = mysqli_fetch_array($result)){

				 		// Verificação casos especiais
				 		// Para alterar a imagem de fundo atrás do transfer

				 		if($_COOKIE["seccao"] == "criancas"){
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

			 			echo '<div id="page '. $counterPages .'" class="pagesTransfers">';
					 		if($linha4 == 1){
					 			echo '<div class="bottom-product">';
							 		echo '<div class="col-md-3 bottom-cd simpleCart_shelfItem">';
							 			echo '<div class="product-at">';
							 				echo '<a href="#" onclick="setLocalArtigo(\''. $_COOKIE['seccao'] . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')"><img style="background: url(images/transfers/'. $pastaImgs .'/'. $range .'.jpg); background-position: center -30px; background-size: 140%" class="img-responsive" src="images/transfers/'. $_COOKIE['seccao'] .'/' . $row['link'] . '" alt="">';
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
							 				echo '<a href="#" onclick="setLocalArtigo(\''. $_COOKIE['seccao'] . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')"><img style="background: url(images/transfers/'. $pastaImgs .'/'. $range .'.jpg); background-position: center -30px; background-size: 140%" class="img-responsive" src="images/transfers/'. $_COOKIE['seccao'] .'/' . $row['link'] . '" alt="">';
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
							 				echo '<a href="#" onclick="setLocalArtigo(\''. $_COOKIE['seccao'] . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')"><img style="background: url(images/transfers/'. $pastaImgs .'/'. $range .'.jpg); background-position: center -30px; background-size: 140%" class="img-responsive" src="images/transfers/'. $_COOKIE['seccao'] .'/' . $row['link'] . '" alt="">';
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
								 				echo '<a href="#" onclick="setLocalArtigo(\''. $_COOKIE['seccao'] . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')"><img style="background: url(images/transfers/'. $pastaImgs .'/'. $range .'.jpg); background-position: center -30px; background-size: 140%" class="img-responsive" src="images/transfers/'. $_COOKIE['seccao'] . '/' . $row['link'] . '" alt="">';
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

				 	}

					echo '</div>';

				 	echo "<center><div id=\"pageSelector\">";
						while($initCounter < $counterPages - 1){
							echo "<a id=\"button". $initCounter ."\" style=\"padding-left: 10px; padding-left: 10px;\"class=\"pagesButtons\" href=\"#\" onclick=\"mudaPaginaTransfers(". $initCounter .");\"><span> ". $initCounter ." </span></a>";
							$initCounter++;
						}
					echo "</div></center>"; // //pageSelector

				?>
			</div>

			</div>
				<div class="clearfix"></div>
		</div>
	</div>

<?php
	require_once('footer.php');
?>

</body>
</html>

<script type="text/javascript">

	cookies = $.cookie("seccao");

		if(cookies === "diversos" || cookies === " seccao=diversos"){                 				/* Diversos */
			$("#tituloSeccao").text("Diversos");
		}else if(cookies == "caca_pesca" || cookies == " seccao=caca_pesca"){		  				/* Caça/Pesca */
			$("#tituloSeccao").text("Caça / Pesca");
		}else if(cookies == "animais" || cookies == " seccao=animais"){				 				/* Animais */
			$("#tituloSeccao").text("Animais");
		}else if(cookies == "aniversarios" || cookies == " seccao=aniversarios"){	  				/* Aniversário */
			$("#tituloSeccao").text("Aniversário");
		}else if(cookies == "criancas" || cookies == " seccao=criancas"){							/* Crianças */
			$("#tituloSeccao").text("Crianças");
		}else if(cookies == "desporto" || cookies == " seccao=desporto"){							/* Desporto */
			$("#tituloSeccao").text("Desporto");
		}else if(cookies == "etnicos" || cookies == " seccao=etnicos"){								/* Etnicos */
			$("#tituloSeccao").text("Etnicos");
		}else if(cookies == "famosos" || cookies == " seccao=famosos"){								/* Famosos */
			$("#tituloSeccao").text("Famosos");
		}else if(cookies == "frases_divertidos" || cookies == " seccao=frases_divertidos"){			/* Frases / Divertidos */
			$("#tituloSeccao").text("Frases / Divertidos");
		}else if(cookies == "hipster_retro" || cookies == " seccao=hipster_retro"){					/* Hipster / Retro */
			$("#tituloSeccao").text("Hipster / Retro");
		}else if(cookies == "motores" || cookies == " seccao=motores"){								/* Motores */
			$("#tituloSeccao").text("Motores");
		}else if(cookies == "musica" || cookies == " seccao=musica"){								/* Música */
			$("#tituloSeccao").text("Música");
		}else if(cookies == "moncao" || cookies == " seccao=moncao"){								/* Monção */
			$("#tituloSeccao").text("Monção");
		}

		$(window).on('resize', function () {
			if($(window).width() < 992){
		    	$('#menuLateral').removeClass('height630');
			}else if($(window).width() > 992){
		    	$('#menuLateral').addClass('height630', $(window).width() > 992);
			}
		});

		 /* ================
	    	Local Storage
	       ================*/

	       var setLocalArtigo = function(img, nome, ref, dim, versao){
	       		localStorage.setItem("artigoImg", img);
	       		localStorage.setItem("artigoNome", nome);
	       		localStorage.setItem("artigoRef", ref);
	       		localStorage.setItem("artigoDim", dim);
	       		localStorage.setItem("versaoDark", versao);
	       		window.location.replace("single");
	       }


	       /*  ----------------------------------------------------------- PESQUISA */
	       $(window).load(function(){
				var booleanPesquisa = $.cookie("pesquisa");
				var querySQL = "";

				if(booleanPesquisa === "false"){
					//querySQL = "SELECT * FROM transfers_" + $.cookie("seccao");
					console.log("Não há pesquisa");
				}else if(booleanPesquisa === "true"){
					console.log("Existe Pesquisa");

					$.ajax({
						type: "POST",
						url: 'pesquisaTabelasTransfers.php', //Query para saber o nome das tabelas que começam por "transfers_"
						data: { 'SQL' : querySQL },
						success: function(response){
					
							var stringTabelasLimpa = response.replace('[', '').replace(']', '').replace(/\"/g, '').split(",");
							var querySQL = "";

							$.each(stringTabelasLimpa, function(index, value){
								if(index == 0){
									querySQL = "SELECT * FROM "+ stringTabelasLimpa[index] +" WHERE referencia LIKE '%"+ $.cookie("campoPesquisa") +"%' OR nome LIKE '%"+ $.cookie("campoPesquisa") +"%'";
								}else{
									querySQL = querySQL + " UNION SELECT * FROM "+ stringTabelasLimpa[index] +" WHERE referencia LIKE '%"+ $.cookie("campoPesquisa") +"%' OR nome LIKE '%"+ $.cookie("campoPesquisa") +"%' ";
								}
							});

							/* POST para preencher area dos transfers com os resultados da pesquisa */
							$.ajax({
								type: "POST",
								url: 'preencheTransfer.php',
								data: { 'SQL' : querySQL },
								success: function(response){
									if (response == "</div><center><div id=\"pageSelector\"></div></center>"){ 
										console.log("não encontrou resposta");  
									    $("#areaTransfers").html("<h3>A sua pesquisa '" + $.cookie("campoPesquisa") + "' não encontrou nenhum transfer.</h3><br><p><strong>Sugestão: </strong> Tente utilizar outras palavras-chave.</p>");
									}else{
										console.log("encontrou resposta");
									    //Mostrar resultados
									    $("#areaTransfers").html(response);
										$("#tituloSeccao").html("Resultados da Pesquisa");
										
										//Dividir resultados em páginas
										$("div[class^='page']").addClass("hidden");
	       								$(".page1").removeClass("hidden");
	       								$("#button1").addClass("buttonActive");
									}
								}
							});
						}
					});

				
				}

				/*  ----------------------------------------------------------- PESQUISA */

			}); // Load


	       var mudaPaginaTransfers = function(numPagina){
	       		$("[id^='button']").removeClass("buttonActive");
	       		$("#button"+ numPagina).addClass("buttonActive");
	       		$("div[class^='page']").addClass("hidden");
	       		$(".page"+ numPagina).removeClass("hidden");
	       }


</script>