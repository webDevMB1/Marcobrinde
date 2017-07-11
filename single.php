<script type="text/javascript">
	var tipoCamisola = "T-Shirt Unisexo";
	var qualidade = "100% Algodão, 190g";

	var getSeccaoArtigoActivo = localStorage.getItem("artigoImg").split("/");
	localStorage.setItem("seccaoArtigoActivo", getSeccaoArtigoActivo[0]);
	localStorage.setItem("linkCurto", getSeccaoArtigoActivo[2])

	var getRefArtigoActivo = localStorage.getItem("artigoRef");
	document.cookie = "refActivo=" + getRefArtigoActivo;



</script>
<style type="text/css">

	.irCarrinho{
		background-color: black;
		color: white;
		text-decoration: none;
		padding: 0.4em 0.8em;
	}

	.irCarrinho:hover{
		background-color: white;
		color: black;
		text-decoration: none;
	}

	.buttonAdd{
		text-decoration: none;
		color: #fff;
		background: black;
		border: none;
		padding: 0.4em 0.8em;
		font-size: 0.9em;
		text-transform: uppercase;
		margin-top: 2em;
		display: inline-block;
	}

	.buttonAdd:hover{
		text-decoration: none;
		color: black;
		background-color: white;
	}

	.buttonAdd:focus{
		color: white;
		background-color: black;
		text-decoration: none;
	}

</style>
<!DOCTYPE html>
<html>
<head>
<title>MarcoBrinde Loja Online</title>
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
<script src="js/simpleCart.min.js"> </script>
<script src="js/imagezoom.js"></script>
<script type="text/javascript" src="js/main.js"></script>
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
<body>

<?php

	require_once('header.php');
?>

		<div class="product">
			<div class="container">
				<div class="product-price1">
				<div class="top-sing">
				<div id="alertSecondVersion" class="alert alert-danger hidden" role="alert" style="margin-left: 1.5%">
				  <strong>Atenção!</strong> O transfer seleccionado tem uma versão para fundos escuros. Para alterar <a id="changeVersion" href="#" onclick="">CLIQUE AQUI</a>
				</div>
				<div class="col-md-7 single-top">
					<div id="divFlexslider" class="flexslider" style="background: url('images/roupa/tshirtUni/tshirtGreen.jpg') no-repeat center center;
						-webkit-background-size: 100%;
					    -moz-background-size: 100%;
					    -o-background-size: 100%;
					    background-size: 100%;
					    -webkit-background-size: cover;
					    -moz-background-size: cover;
					    -o-background-size: cover;
					    background-size: cover;">
						<ul class="slides">
						    <li id="liThumbFirst" data-thumb="#">
						        <div id="thumbFirst" class="thumb-image"> <img class="adjustImgSingle item_image" src="#" data-imagezoom="true" class="img-responsive"></div>
						    </li>

						    <?php
						    	include('connectBD.php');

						    	$seccao = $_COOKIE['seccao'];
						    	$ref = $_COOKIE['refActivo'];

						    	$table_transfers = "transfers_" . $seccao;

							 	$sqlSeccao = "SELECT * FROM " . $table_transfers . " ORDER BY RAND()";
							 	$resultSeccao = mysqli_query($db, $sqlSeccao);

						    	$seccao3 = 1;
						    	$jsonResults = "";

							 	while($row = mysqli_fetch_array($resultSeccao)){
							 		if($seccao3 != 4){
							 			echo '<li id="liThumb' . $seccao3 . '" data-thumb="images/transfers/'. $seccao . '/' . $row['link'] .'">';
							 				echo '<div id="thumb' . $seccao3 . '" class="thumb-image">';
							 					echo '<img id="change'. $seccao3 .'" class="adjustImgSingle item_image" style="margin-top: -8%; margin-left: 20%" src="images/transfers/' . $seccao . '/' . $row['link'] . '" data-imagezoom="true" class="img-responsive">';
							 				echo '</div>';
							 			echo '</li>';
							 			$jsonResults = $jsonResults . $row['nome'] .",". $row['referencia'] ."," . $row['dimensoes'] . "," . $row['linkDark'] .";";
							 			$seccao3++;
							 		}else if($seccao3 == 4){
							 				echo '<div id="thumb' . $seccao3 . '" class="thumb-image">';
							 					echo '<img class="adjustImgSingle item_image" src="#" data-imagezoom="true" class="img-responsive">';
							 				echo '</div>';
							 		}else{
							 			return;
							 		}
							 	}

							 	//mysql_close($db);
						    ?>
						</ul>
					</div>
					<div class="clearfix"> </div>
					<!-- slide -->

					<!-- FlexSlider -->
				  <script defer src="js/jquery.flexslider.js"></script>
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
				</div>

					<div class="col-md-5 backColor">
						<div class="single-top-in simpleCart_shelfItem">
							<div class="single-para">
							<h4 id="tituloArtigo" class="item_name"></h4>
								<h4 id="qualidadeRoupa" style="font-size: 16px"></h4>
								<br>
								<h4 id="nomeTransfer" style="font-size: 20px"></h4>
								<br>

								<h5 id="preçoArtigo" class="item_price">11.95€</h5>
								<p id="pRef" class="item_ref"></p>
								<p id="dimTransfer"></p>
								<div class="available">
									<div class="row">
										<ul>
											<li id="liTipo" style="width: 100%; margin-left: 0">Tipo <br>
												<select id="selectTipo" style="width: 100%; margin-left: 0" onclick="changeTipo(); changeCor();">
													<option value = "T-Shirt Unisexo">T-Shirt Unisexo</option>
													<option value = "T-Shirt Senhora">T-Shirt Senhora</option>
													<option value = "T-Shirt Criança">T-Shirt Criança</option>
													<option value = "Sweat Capuz Unisexo">Sweat Capuz Unisexo</option>
													<option value = "Sweat Capuz Unisexo (2 Cores)">Sweat Capuz Unisexo (2 Cores)</option>
													<option value = "Sweat Capuz Senhora">Sweat Capuz Senhora</option>
													<option value = "Sweat Capuz Criança">Sweat Capuz Criança</option>
													<option value = "Sweat Simples Unisexo">Sweat Simples Unisexo</option>
													<option value = "Sweat Simples Criança">Sweat Simples Criança</option>
													<option value = "Casaco">Casaco</option>
												</select>
											</li>
										</ul>
										<div class="hidden item_color">Preto</div>
										<div class="hidden item_size">XL</div>
										<div class="hidden item_thumb"></div>
									</div>
									<div class="row">
										<ul>
											<li id="liCor" style="width: 100%">Cor <br>
												<select id="selectCor"  style="width: 100%; margin-left: 0" onclick="changeCor();">
													<option cor="defaultCor" value = "defaultCor">----------</option>
													<option cor="Verde" value = "tshirtUniVerde">Verde</option>
													<option cor="Preto" value = "tshirtUniPreto">Preto</option>
													<option cor="Vermelho" value = "tshirtUniVermelho">Vermelho</option>
													<option cor="Azul Royal" value = "tshirtUniAzulRoyal">Azul Royal</option>
													<option cor="Azul Marinho" value = "tshirtUniAzulMar">Azul Marinho</option>
													<option cor="Areia" value = "tshirtUniAreia">Areia</option>
													<option cor="Laranja" value = "tshirtUniLaranja">Laranja</option>
													<option cor="Verde Tropa" value = "tshirtUniVerdeTropa">Verde Tropa</option>
													<option cor="Branco" value = "tshirtUniBranco">Branco</option>
													<option cor="Cinza Escura" value = "tshirtUniCinza">Cinza Escura</option>
													<option cor="Verde Maca" value = "tshirtAppleGreen">Verde Maçã</option>
												</select>
											</li>
										</ul>
									</div>

									<div class="row">
										<ul>
											<li id="liTamanho" style="width: 100%; margin-left: 0">Tamanho <br>
												<select id="selectSize" style="width: 100%; margin-left: 0" onclick="changeTamanho();">
													<option value = "defaultSize">----------</option>
													<option value = "XXL">XXL</option>
													<option value = "XL">XL</option>
													<option value = "L">L</option>
													<option value = "M">M</option>
													<option value = "S">S</option>
												</select>
											</li>
											<div class="clearfix"> </div>
										</ul>
									</div>
								</div>

									<div id="alertDefault" class="alert alert-danger hidden" role="alert" style="margin-left: 1.5%">
									  <strong>Atenção!</strong> Por favor preencha os campos em branco.
									</div>
									<div id="sucessoCarrinho" class="alert alert-success hidden">
									  Adicionado ao carrinho.
									</div>

									<center>
										<div style="display: inline-block;"><a id="buttonAdd" href="#" class="buttonAdd" onclick="checkValsDefault(); changeThumb()" style="margin-right: 2.5%; margin-bottom: 10%">ADICIONAR</a></div>
										<div style="display: inline-block;"><a href="checkout" class="irCarrinho">IR PARA CARRINHO</a></div>
									</center>


							</div>
						</div>
					</div> <!-- /Close Color -->
					<div class="clearfix"> </div>
				</div>


		<!-- Secção Destaques -->
		<div class=" bottom-product">
			<center><h2 style="font-size: 26px">DESTAQUES</h2></center>
			<br>
			<div class="divider"></div>

			<?php
				include('connectBD.php');

			 	$table_transfers = "destaque_transfers";

			 	$sql = "SELECT * FROM " . $table_transfers;
			 	$result = mysqli_query($db, $sql);

			 	$destaques3 = 0;

			 	while($row = mysqli_fetch_array($result)){
			 		if($destaques3 !== 3){
				 		echo '<div class="col-md-4 bottom-cd simpleCart_shelfItem">';
				 			echo '<div class="product-at ">';
				 				echo '<a href="#" onclick="setLocalArtigo(\'' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\'); actualCookieSeccao('. '\'' . $row['tipo'] . '\'' .')"><img class="img-responsive" src="images/transfers/' . $row['link'] . '" alt="">';
				 					echo '<div class="pro-grid"><span class="buy-in">Comprar</span></div>';
				 				echo '</a>';
				 			echo '</div>';
				 			echo '<center><p><span>' . $row['nome'] . '</span><br>' . $row['referencia'] . '</p></center>';
				 		echo '</div>';
				 		$destaques3++;
				 	}
			 	}
			 	//mysql_close($db);
			?>

			<div class="clearfix"> </div>
		</div>



</div>

		<div class="clearfix"> </div>
		</div>
		</div>

<?php
	require_once('footer.php');
?>

</body>
</html>

<script type="text/javascript">

	var linkImgProducts = localStorage.getItem("artigoImg");
	var transferNome = localStorage.getItem("artigoNome");
	var transferRef = localStorage.getItem("artigoRef");


	$("#pRef").text(transferRef);
	$("#nomeTransfer").text(transferNome);

	$(window).on('resize', function () {
	    $('.single-top').removeClass('single-top', $(window).width() < 992);
	});


	$(window).load(function() {

		/* se o transfer for do alvarinho; apenas existem t-shirts verde maça */

		if($.cookie('refActivo') == "MB-Moncao-#0005" || $.cookie('refActivo') == "MB-Moncao-#0006" || $.cookie('refActivo') == "MB-Moncao-#0007" || $.cookie('refActivo') == "MB-Moncao-#0008"){
			$("#liTipo").html("<option value = \"T-Shirt Unisexo\">T-Shirt Unisexo</option>");
			$("#selectCor").html("<option cor=\"defaultCor\" value = \"defaultCor\">----------</option>\
								  <option cor=\"Verde Maçã\" value = \"tshirtAppleGreen\">Verde Maçã</option>");
			$("#divFlexslider").css({"background": "url('images/roupa/tshirtUni/tshirtAppleGreen.jpg') no-repeat center center",
						"-webkit-background-size": "100%",
					    "-moz-background-size": "100%",
					    "-o-background-size": "100%",
					    "background-size": "100%",
					    "-webkit-background-size": "cover",
					    "-moz-background-size": "cover",
					    "-o-background-size": "cover",
					    "background-size": "cover"});
			$("#preçoArtigo").text("9.99€");
			$.cookie('valorCompra', "9.99");
		} // se for da feira da foda só dá para por areia
		else if($.cookie('refActivo') == "MB-Moncao-#0001" || $.cookie('refActivo') == "MB-Moncao-#0002" || $.cookie('refActivo') == "MB-Moncao-#0003" || $.cookie('refActivo') == "MB-Moncao-#0004"){
			$("#liTipo").html("<option value = \"T-Shirt Unisexo\">T-Shirt Unisexo</option>");
			$("#selectCor").html("<option cor=\"defaultCor\" value = \"defaultCor\">----------</option>\
								  <option cor=\"Areia\" value = \"tshirtUniAreia\">Areia</option>");
			$("#divFlexslider").css({"background": "url('images/roupa/tshirtUni/tshirtSand.jpg') no-repeat center center",
						"-webkit-background-size": "100%",
					    "-moz-background-size": "100%",
					    "-o-background-size": "100%",
					    "background-size": "100%",
					    "-webkit-background-size": "cover",
					    "-moz-background-size": "cover",
					    "-o-background-size": "cover",
					    "background-size": "cover"});
			$("#preçoArtigo").text("9.99€");
			$.cookie('valorCompra', "9.99");
		}

		// / Fim verificação transfers

		$("#qualidadeRoupa").text(qualidade);

		/* Confirmar versão black ao entrar na página */
		checkVersionBlackSelectedTransfer(localStorage.getItem("versaoDark"), 1, $(".flex-control-nav").find("li:nth-child(1)").find("img").attr("src"));

		var varJsonResults = "<?php Print($jsonResults); ?>";

		/* receber do PHP o valor do linkDark */
		var jsonResult2 = varJsonResults.split(";")[0].split(",");
		var jsonResult3 = varJsonResults.split(";")[1].split(",");
		var jsonResult4 = varJsonResults.split(";")[2].split(",");


		// Guardar links Dark no localStorage
		localStorage.setItem("versaoDark2", jsonResult2[3]);
		localStorage.setItem("versaoDark3", jsonResult3[3]);
		localStorage.setItem("versaoDark4", jsonResult4[3]);


	  /* Imagem do transfer em cima das camisolas */
	  $("#thumbFirst").find("img").attr("src", "images/transfers/" + linkImgProducts);
	  $("#liThumbFirst").attr("data-thumb", "images/transfers/" + linkImgProducts);
	  $("#thumbFirst").find("img").css({'width': '40%', 'margin-top': '5%', 'margin-left': '32%'});
	  $("#liThumb1").find("img").css({"width": "40%", "margin-top": "5%", "margin-left": "32%"});
	  $("#liThumb2").find("img").css({"width": "40%", "margin-top": "5%", "margin-left": "32%"});
	  $("#liThumb3").find("img").css({"width": "40%", "margin-top": "5%", "margin-left": "32%"});

	  changeTituloSeccao(transferNome);


	  $('.flexslider').flexslider({
	    animation: "slide",
	    controlNav: "thumbnails"
	  });

	  /* Mostrar dimensoes do transfer */
	  $("#dimTransfer").text("Dimensões do desenho (aprox.): " + localStorage.getItem('artigoDim'));

	  /* Listeners para alterar info transfer seleccionado */

	  	$(".flex-control-nav").find("li:nth-child(1)").find("img").click(function(){
			actualizaInfoTransfer(localStorage.getItem('artigoNome'), localStorage.getItem('artigoRef'), localStorage.getItem('artigoDim'));
	  		checkVersionBlackSelectedTransfer(localStorage.getItem("versaoDark"), 1, $(this).attr("src"));
		});

	  	$(".flex-control-nav").find("li:nth-child(2)").find("img").click(function(){
			actualizaInfoTransfer(jsonResult2[0], jsonResult2[1], jsonResult2[2]);
	  		checkVersionBlackSelectedTransfer(localStorage.getItem("versaoDark2"), 2, $(this).attr("src"));
		});

		$(".flex-control-nav").find("li:nth-child(3)").find("img").click(function(){
			actualizaInfoTransfer(jsonResult3[0], jsonResult3[1], jsonResult3[2]);
	  		checkVersionBlackSelectedTransfer(localStorage.getItem("versaoDark3"), 3, $(this).attr("src"));
		});

		$(".flex-control-nav").find("li:nth-child(4)").find("img").click(function(){
			actualizaInfoTransfer(jsonResult4[0], jsonResult4[1], jsonResult4[2]);
	  		checkVersionBlackSelectedTransfer(localStorage.getItem("versaoDark4"), 4, $(this).attr("src"));
		});

		/* Colocar max height nas miniaturas */

		$(".flex-control-nav").find("li").css("max-height","150px");

	});

	/* Actualizar cookie seccao */

       var actualCookieSeccao = function(actual){
       		document.cookie = "seccao=" + actual;
       }

	/* ================
    	Local Storage
       ================*/

       var setLocalArtigo = function(img, nome, ref){
       		localStorage.setItem("artigoImg", img);
       		localStorage.setItem("artigoNome", nome);
       		localStorage.setItem("artigoRef", ref);
       		window.location.replace("single");
       }


      /* ======================================================
	 	  Confirmar se o transfer seleccionado tem versão dark
	   	 ====================================================== */

	   var checkVersionBlackSelectedTransfer = function(localVersaoDark, numDos4, versaoLight){

			/* Reset às 4 imgs para versão light */
			if(numDos4 == 1){
				$("#alertSecondVersion").html("<strong>Atenção!</strong> O transfer seleccionado tem uma versão para fundos escuros. Para alterar <a id=\"changeVersion\" href=\"#\" onclick=\"\">CLIQUE AQUI</a>");

				$("#changeVersion").attr("onclick", "changeVersionTransfer("+ numDos4 +", \""+ localVersaoDark +"\", \""+ $.cookie("seccao") + "\", \"" + localStorage.getItem('linkCurto') + "\")");

				$("#thumbFirst").find("img").attr("src", versaoLight);
			}else if(numDos4 == 2){
				$("#alertSecondVersion").html("<strong>Atenção!</strong> O transfer seleccionado tem uma versão para fundos escuros. Para alterar <a id=\"changeVersion\" href=\"#\" onclick=\"\">CLIQUE AQUI</a>");

				$("#changeVersion").attr("onclick", "changeVersionTransfer("+ numDos4 +", \""+ localVersaoDark +"\", \""+ $.cookie("seccao") + "\"	, \"" + versaoLight + "\")");

				$("#thumb1").find("img").attr("src", versaoLight);
			}else if(numDos4 == 3){
				$("#alertSecondVersion").html("<strong>Atenção!</strong> O transfer seleccionado tem uma versão para fundos escuros. Para alterar <a id=\"changeVersion\" href=\"#\" onclick=\"\">CLIQUE AQUI</a>");

				$("#changeVersion").attr("onclick", "changeVersionTransfer("+ numDos4 +", \""+ localVersaoDark +"\", \""+ $.cookie("seccao") + "\"	, \"" + versaoLight + "\")");

				$("#thumb2").find("img").attr("src", versaoLight);
			}else if(numDos4 == 4){
				$("#alertSecondVersion").html("<strong>Atenção!</strong> O transfer seleccionado tem uma versão para fundos escuros. Para alterar <a id=\"changeVersion\" href=\"#\" onclick=\"\">CLIQUE AQUI</a>");

				$("#changeVersion").attr("onclick", "changeVersionTransfer("+ numDos4 +", \""+ localVersaoDark +"\", \""+ $.cookie("seccao") + "\"	, \"" + versaoLight + "\")");

				$("#thumb3").find("img").attr("src", versaoLight);
			}

			if(localVersaoDark != ""){
				$("#alertSecondVersion").removeClass("hidden");
			}else{
				$("#alertSecondVersion").addClass("hidden");
			}

	   }

       /* =======================================
       		Mudar versão do transfer para Black
          ======================================= */


/*BLACK */  var changeVersionTransfer = function(numDos4, versionDark, seccao){
          		antigaRef = $("#pRef").text();

          		if(numDos4 == 1){
          			$("#alertSecondVersion").html("<strong>Atenção!</strong> Para voltar ao transfer original <a id=\"changeVersion\" href=\"#\" onclick=\"voltaWhite("+ numDos4 +")\">CLIQUE AQUI</a>");
	          		$("#thumbFirst").find("img").attr("src", "images/transfers/"+ $.cookie("seccao") +"/"+ versionDark +"");
	          		$("#pRef").text(antigaRef + "-dark");
          		}else if(numDos4 == 2){
					$("#alertSecondVersion").html("<strong>Atenção!</strong> Para voltar ao transfer original <a id=\"changeVersion\" href=\"#\" onclick=\"voltaWhite("+ numDos4 +")\">CLIQUE AQUI</a>");
	          		$("#thumb1").find("img").attr("src", "images/transfers/"+ $.cookie("seccao") +"/"+ versionDark +"");
	          		$("#pRef").text(antigaRef + "-dark");
          		}else if(numDos4 == 3){
					$("#alertSecondVersion").html("<strong>Atenção!</strong> Para voltar ao transfer original <a id=\"changeVersion\" href=\"#\" onclick=\"voltaWhite("+ numDos4 +")\">CLIQUE AQUI</a>");
	          		$("#thumb2").find("img").attr("src", "images/transfers/"+ $.cookie("seccao") +"/"+ versionDark +"");
	          		$("#pRef").text(antigaRef + "-dark");
          		}else if(numDos4 == 4){
					$("#alertSecondVersion").html("<strong>Atenção!</strong> Para voltar ao transfer original <a id=\"changeVersion\" href=\"#\" onclick=\"voltaWhite("+ numDos4 +")\">CLIQUE AQUI</a>");
	          		$("#thumb3").find("img").attr("src", "images/transfers/"+ $.cookie("seccao") +"/"+ versionDark +"");
	          		$("#pRef").text(antigaRef + "-dark");
          		}

          }

          /* ============================================
          		voltar para a versão white do transfer
             ============================================ */

            var voltaWhite = function(numDos4){


             	if(numDos4 == 1){

             		versaoLight = "images/transfers/"+ $.cookie("seccao") + "/light/" + localStorage.getItem("linkCurto");

             		$("#alertSecondVersion").html("<strong>Atenção!</strong> O transfer seleccionado tem uma versão para fundos escuros. Para alterar <a id=\"changeVersion\" href=\"#\" onclick=\"\">CLIQUE AQUI</a>");

					$("#changeVersion").attr("onclick", "changeVersionTransfer("+ numDos4 +", \""+ localStorage.getItem("versaoDark") +"\", \""+ $.cookie("seccao") + "\", \"" + localStorage.getItem('linkCurto') + "\")");

					$("#thumbFirst").find("img").attr("src", versaoLight);
					oldRef = $("#pRef").text();
					oldRefSplit = oldRef.split("-");
					$("#pRef").text(oldRefSplit[0] + "-" + oldRefSplit[1] + "-" + oldRefSplit[2]);
             	}else if(numDos4 == 2){

	             	versaoLight = "images/transfers/"+ $.cookie("seccao") + "/light/" + localStorage.getItem("versaoDark2").split("-")[1];

					$("#alertSecondVersion").html("<strong>Atenção!</strong> O transfer seleccionado tem uma versão para fundos escuros. Para alterar <a id=\"changeVersion\" href=\"#\" onclick=\"\">CLIQUE AQUI</a>");

					$("#changeVersion").attr("onclick", "changeVersionTransfer("+ numDos4 +", \""+ localStorage.getItem("versaoDark2") +"\", \""+ $.cookie("seccao") + "\"	, \"" + versaoLight + "\")");

					$("#thumb1").find("img").attr("src", versaoLight);
					oldRef = $("#pRef").text();
					oldRefSplit = oldRef.split("-");
					$("#pRef").text(oldRefSplit[0] + "-" + oldRefSplit[1] + "-" + oldRefSplit[2]);
				}else if(numDos4 == 3){

					versaoLight = "images/transfers/"+ $.cookie("seccao") + "/light/" + localStorage.getItem("versaoDark3").split("-")[1];

					$("#alertSecondVersion").html("<strong>Atenção!</strong> O transfer seleccionado tem uma versão para fundos escuros. Para alterar <a id=\"changeVersion\" href=\"#\" onclick=\"\">CLIQUE AQUI</a>");

					$("#changeVersion").attr("onclick", "changeVersionTransfer("+ numDos4 +", \""+ localStorage.getItem("versaoDark3") +"\", \""+ $.cookie("seccao") + "\"	, \"" + versaoLight + "\")");

					$("#thumb2").find("img").attr("src", versaoLight);
					oldRef = $("#pRef").text();
					oldRefSplit = oldRef.split("-");
					$("#pRef").text(oldRefSplit[0] + "-" + oldRefSplit[1] + "-" + oldRefSplit[2]);
				}else if(numDos4 == 4){

					versaoLight = "images/transfers/"+ $.cookie("seccao") + "/light/" + localStorage.getItem("versaoDark4").split("-")[1];

					$("#alertSecondVersion").html("<strong>Atenção!</strong> O transfer seleccionado tem uma versão para fundos escuros. Para alterar <a id=\"changeVersion\" href=\"#\" onclick=\"\">CLIQUE AQUI</a>");

					$("#changeVersion").attr("onclick", "changeVersionTransfer("+ numDos4 +", \""+ localStorage.getItem("versaoDark4") +"\", \""+ $.cookie("seccao") + "\"	, \"" + versaoLight + "\")");

					$("#thumb3").find("img").attr("src", versaoLight);
					oldRef = $("#pRef").text();
					oldRefSplit = oldRef.split("-");
					$("#pRef").text(oldRefSplit[0] + "-" + oldRefSplit[1] + "-" + oldRefSplit[2]);
				}

             }


		   /* =====================================================================
	    		Alternar info do transfer consoante o transfer seleccionado
	       ===================================================================== */


	      var actualizaInfoTransfer = function(nome, ref, dim){

	      		changeTituloSeccao(nome);

	      		$("#nomeTransfer").text(nome);
	      		$("#pRef").text(ref);
	      		$("#dimTransfer").text("Dimensões do desenho (aprox.): " + dim);


						if($("#pRef").text() == "MB-Moncao-#0005" || $("#pRef").text() == "MB-Moncao-#0006" || $("#pRef").text() == "MB-Moncao-#0007" || $("#pRef").text() == "MB-Moncao-#0008"){  //Se altera para o transfer do alvarinho só dá para escolher verde maçã
								$("#liTipo").html("<option value = \"T-Shirt Unisexo\">T-Shirt Unisexo</option>");
								$("#selectCor").html("<option cor=\"defaultCor\" value = \"defaultCor\">----------</option>\
														<option cor=\"Verde Maçã\" value = \"tshirtAppleGreen\">Verde Maçã</option>");
								$("#divFlexslider").css({"background": "url('images/roupa/tshirtUni/tshirtAppleGreen.jpg') no-repeat center center",
											"-webkit-background-size": "100%",
												"-moz-background-size": "100%",
												"-o-background-size": "100%",
												"background-size": "100%",
												"-webkit-background-size": "cover",
												"-moz-background-size": "cover",
												"-o-background-size": "cover",
												"background-size": "cover"});

						} // Se for da feira da foda só dá para seleccionar areia
						else if($("#pRef").text() == "MB-Moncao-#0001" || $("#pRef").text() == "MB-Moncao-#0002" || $("#pRef").text() == "MB-Moncao-#0003" || $("#pRef").text() == "MB-Moncao-#0004"){
							$("#liTipo").html("<option value = \"T-Shirt Unisexo\">T-Shirt Unisexo</option>");
							$("#selectCor").html("<option cor=\"defaultCor\" value = \"defaultCor\">----------</option>\
													<option cor=\"Areia\" value = \"tshirtUniAreia\">Areia</option>");
							$("#divFlexslider").css({"background": "url('images/roupa/tshirtUni/tshirtSand.jpg') no-repeat center center",
										"-webkit-background-size": "100%",
											"-moz-background-size": "100%",
											"-o-background-size": "100%",
											"background-size": "100%",
											"-webkit-background-size": "cover",
											"-moz-background-size": "cover",
											"-o-background-size": "cover",
											"background-size": "cover"});
						}else{ //Se não poe tudo disponível
							$("#liTipo").html("<option value = \"T-Shirt Unisexo\">T-Shirt Unisexo</option>");
							$("#selectCor").html("<option cor=\"defaultCor\" value = \"defaultCor\">----------</option>\
													<option cor=\"Verde\" value = \"tshirtUniVerde\">Verde</option>\
													<option cor=\"Preto\" value = \"tshirtUniPreto\">Preto</option>\
													<option cor=\"Vermelho\" value = \"tshirtUniVermelho\">Vermelho</option>\
													<option cor=\"Azul Royal\" value = \"tshirtUniAzulRoyal\">Azul Royal</option>\
													<option cor=\"Azul Marinho\" value = \"tshirtUniAzulMar\">Azul Marinho</option>\
													<option cor=\"Areia\" value = \"tshirtUniAreia\">Areia</option>\
													<option cor=\"Laranja\" value = \"tshirtUniLaranja\">Laranja</option>\
													<option cor=\"Verde Tropa\" value = \"tshirtUniVerdeTropa\">Verde Tropa</option>\
													<option cor=\"Branco\" value = \"tshirtUniBranco\">Branco</option>\
													<option cor=\"Cinza Escura\" value = \"tshirtUniCinza\">Cinza Escura</option>\
													<option cor=\"Verde Maçã\" value = \"tshirtAppleGreen\">Verde Maçã</option>");
							$("#divFlexslider").css({"background": "url('images/roupa/tshirtUni/tshirtGreen.jpg') no-repeat center center",
										"-webkit-background-size": "100%",
											"-moz-background-size": "100%",
											"-o-background-size": "100%",
											"background-size": "100%",
											"-webkit-background-size": "cover",
											"-moz-background-size": "cover",
											"-o-background-size": "cover",
											"background-size": "cover"});
						}

	      }

	      	/* ===============================================================
				 Verifica se os campos "cor" e "tamanho" estão seleccionados
				 e adiciona as classes ao button "adicionar"
			   =============================================================== */

			var checkValsDefault = function(){

				confirmSize = false;
				confirmCor = false;

				if($('#selectCor option').filter(':selected').attr("value") == "defaultCor"){
					$("#alertDefault").removeClass("hidden");
					$("#sucessoCarrinho").addClass("hidden");
					confirmCor = false;
				}else{
					confirmCor = true;
				}

				if($('#selectSize option').filter(':selected').attr("value") == "defaultSize"){
					$("#alertDefault").removeClass("hidden");
					$("#sucessoCarrinho").addClass("hidden");
					confirmSize = false;
				}else{
					confirmSize = true;
				}

				if(confirmSize == true && confirmCor == true){
					$("#alertDefault").addClass("hidden");
					
					//Fade in e Fade out do alert success "adicionado ao carrinho"
					$("#sucessoCarrinho").fadeIn( "fast", function() {
						$("#sucessoCarrinho").removeClass("hidden");
					});

					setTimeout(function(){
						$("#sucessoCarrinho").fadeOut( 2000, function() {
						    $("#sucessoCarrinho").addClass("hidden");
						  });
					}, 1500);
					
					$("#buttonAdd").addClass("add-cart");
					$("#buttonAdd").addClass("item_add");
				}else{
					$("#alertDefault").removeClass("hidden");
					$("#sucessoCarrinho").addClass("hidden");
					$("#buttonAdd").removeClass("add-cart");
					$("#buttonAdd").removeClass("item_add");
					confirmSize = false;
					confirmCor = false;
				}
			}

</script>
