<?php
	session_start();
?>

<script type="text/javascript">

	document.cookie = "seccao=index";
	/*document.cookie = "pesquisa=false";
	document.cookie = "sql=";*/

</script>

<!DOCTYPE html>
<html>
<head>
<title>MarcoBrinde Loja Online</title>
<link rel="icon" href="images/logo/icon.png" />
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessario para Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- navbar -->
<link href="css/navbar.css" rel="stylesheet" type="text/css"/>
<!-- carousel -->
<link href="css/carousel.css" rel="stylesheet" type="text/css" media="all" />
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
<script type="text/javascript" src="js/main.js"></script>

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


	<!--<div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>

	</div>
	</div>-->

	 <!-- Carousel
	    ================================================== -->
	    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="overflow: hidden">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	      </ol>
	      <div class="carousel-inner" role="listbox">
	        <!--<div class="item active">
	          <center><a href="#" onclick="changeGaleria('moncao')"><img class="second-slide" src="images/bannerFeiraFoda.jpg" alt="Second slide" style="width: 100%; height: auto; max-width: 2500px"></a></center>
	        </div>-->

					<div class="item active">
						<center><a href="#" onclick="changeGaleria('moncao')"><img class="first-slide" src="images/bannerFeiraAlvarinho.jpg" alt="First slide" style="width: 100%; height: auto"></a></center>
					</div>

					<div class="item">
						<center><a href="#" onclick="changeGaleria('moncao')"><img class="second-slide" src="images/bannerFeiraAlvarinho2.jpg" alt="Second slide" style="width: 100%; height: auto"></a></center>
					</div>

					<div class="item">
						<center><img class="last-slide" src="images/banner.jpg" alt="Last slide" style="width: 100%; height: auto"></center>
					</div>

	      </div>
	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	        <span aria-hidden="true"><img src="images/prev.png" style="width: 30%; margin-top: 60%"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	        <span aria-hidden="true"><img src="images/next.png" style="width: 30%; margin-top: 60%"></span>
	        <span class="sr-only">Next</span>
	      </a>
	    </div><!-- /.carousel -->

<!--content-->
<div class="container">
	<div class="cont">
		<div class="content-top">
			<div class="grid-in">
				<div id="rowRecentes" class="row">
					<h1>RECENTES</h1>
					<div class="divider" style="margin-bottom: 30px"></div>

					<?php

						include('connectBD.php');

					 	$recentes = "recentes_transfers";

					 	$sqlRecentes = "SELECT * FROM " . $recentes . " ORDER BY id DESC";

					 	$resultRecentes = mysqli_query($db, $sqlRecentes);

					 	$dest4 = 0;

					 	while($row = mysqli_fetch_array($resultRecentes)){

					 		if($row['linkDark'] != "" ){
				 				$secondVersion = $row['linkDark'];
				 			}else{
				 				$secondVersion = "";
				 			}

					 		if($dest4 != 4){
						 		echo '<div class="col-md-3 col-sm-6 col-xs-6 grid-top simpleCart_shelfItem">';
						 			echo '<a href="#" onclick="actualCookieSeccao('. '\'' . $row['tipo'] . '\'' .'); setLocalArtigo(\'' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')" class="b-link-stripe b-animate-go  thickbox">';
						 				echo '<img class="img-responsive" src="images/transfers/' . $row['linkRoupa'] . '" alt="">';
						 				echo '<div class="b-wrapper">';
						 					echo '<h3 class="b-animate b-from-left b-delay03 "><span>' . $row['nome'] . '</span></h3>';
						 				echo '</div>';
						 			echo '</a>';
						 			echo '<p><a href="single">' . $row['nome'] . '</a></p>';
						 			echo '<p style="font-size: 14px"><a href="single">' . $row['referencia'] . '</a></p>';
						 		echo '</div>';
						 		$dest4++;
						 	}else{
						 		return;
						 	}
					 	}
					?>

					<div class="clearfix"> </div>
				</div><!--// row -->

				<!-- Area de Destaques -->
				<div id="rowDestaques" class="row" style="margin-top: 10%">
					<h1>DESTAQUES</h1>
					<div class="divider" style="margin-bottom: 30px"></div>
						<div class="container">
							<div class="row" id="destWindowLarge">
								<?php
									include('connectBD.php');

						 			$table_transfers = "destaque_transfers";

									$sql = "SELECT * FROM " . $table_transfers;
								 	$result = mysqli_query($db, $sql);

								 	$destaques4 = 0;
								 	$secondVersion = "";

								 	while($row = mysqli_fetch_array($result)){

								 		if($row['linkDark'] != "" ){
							 				$secondVersion = $row['linkDark'];
							 			}else{
							 				$secondVersion = "";
							 			}


							 			/*echo '<div class="bottom-product">';
									 		echo '<div class="col-md-3 bottom-cd simpleCart_shelfItem">';
									 			echo '<div class="product-at">';
									 				echo '<a href="#" onclick="setLocalArtigo(\''. $_COOKIE['seccao'] . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')"><img class="img-responsive" src="images/transfers/'. $_COOKIE['seccao'] .'/' . $row['link'] . '" alt="">';
									 					echo '<div class="pro-grid"><span class="buy-in">Comprar</span></div>';
									 				echo '</a>';
									 				echo '<center><p><span>' . $row['nome'] . '</span><br>' . $row['referencia'] . '</p></center>';
									 			echo '</div>';
								 			echo '</div>';*/


								 		if($destaques4 !== 4){
									 		echo '<div class="col-md-3 col-sm-3 col-xs-3 grid-top simpleCart_shelfItem">';
									 			echo '<a href="#" onclick="actualCookieSeccao('. '\'' . $row['tipo'] . '\'' .'); setLocalArtigo(\'' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')" class="b-link-stripe b-animate-go  thickbox">';
									 				echo '<img class="img-responsive" src="images/transfers/' . $row['linkRoupa'] . '" alt="">';
									 				echo '<div class="b-wrapper">';
									 					echo '<h3 class="b-animate b-from-left b-delay03 "><span>' . $row['nome'] . '</span></h3>';
									 				echo '</div>';
									 			echo '</a>';
									 			echo '<p><a href="#" onclick="actualCookieSeccao('. '\'' . $row['tipo'] . '\'' .'); setLocalArtigo(\''. $row['tipo'] . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')">' . $row['nome'] . '</a></p>';
									 			echo '<p style="font-size: 14px"><a href="#" onclick="setLocalArtigo(\''. $row['tipo'] . '/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $secondVersion .'\'); actualCookieSeccao('. '\'' . $row['tipo'] . '\'' .')">' . $row['referencia'] . '</a></p>';
									 		echo '</div>';
									 		$destaques3++;
									 	}
								 	}

								?>
							</div>
							<div class="row hidden" id="destFeiraFoda">
								<?php
									include('connectBD.php');

						 			$table_transfers = "transfers_moncao";

									$sql = "SELECT * FROM " . $table_transfers;
								 	$result = mysqli_query($db, $sql);

								 	$destaques4 = 0;
								 	$secondVersion = "";

								 	while($row = mysqli_fetch_array($result)){

								 		if($row['linkDark'] != "" ){
							 				$secondVersion = $row['linkDark'];
							 			}else{
							 				$secondVersion = "";
							 			}


								 		if($destaques4 !== 4){
									 		echo '<div class="col-md-3 col-sm-3 col-xs-3 grid-top simpleCart_shelfItem">';
									 			echo '<a href="#" onclick="actualCookieSeccao('. '\'moncao\'' .'), setLocalArtigo(\'moncao/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')" class="b-link-stripe b-animate-go  thickbox">';
									 				echo '<img class="img-responsive" src="images/transfers/moncao/' . $row['link'] . '" alt="">';
									 				echo '<div class="b-wrapper">';
									 					echo '<h3 class="b-animate b-from-left b-delay03 "><span>' . $row['nome'] . '</span></h3>';
									 				echo '</div>';
									 			echo '</a>';
									 			echo '<p><a href="#" onclick="actualCookieSeccao('. '\'moncao\'' .'); setLocalArtigo(\'moncao/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $row['dimensoes'] .'\',\''. $secondVersion .'\')">' . $row['nome'] . '</a></p>';
									 			echo '<p style="font-size: 14px"><a href="#" onclick="setLocalArtigo(\'moncao/' . $row['link'] .'\',\''. $row['nome'] .'\',\'' . $row['referencia'] .'\',\''. $secondVersion .'\'); actualCookieSeccao('. '\'moncao\'' .')">' . $row['referencia'] . '</a></p>';
									 		echo '</div>';
									 		$destaques3++;
									 	}
								 	}
								?>
							</div>
						</div>
						<div class="clearfix"></div>
				</div><!--// row -->
			</div><!--// grid in -->
		</div>
	</div>
</div>

<?php
	require_once('footer.php');
?>

</body>
</html>

<script type="text/javascript">
	if($(window).width() < 320){
		$(".header-top").removeClass("header-top");
	}

	$(window).on('resize', function () {
		if($(window).width() < 768){
			$('#myCarousel').addClass('hidden');
			$("#destWindowLarge").addClass('hidden');
			$("#destFeiraFoda").removeClass('hidden');
		}else{
			$('#myCarousel').removeClass('hidden');
			$("#destWindowLarge").removeClass('hidden');
			$("#destFeiraFoda").addClass('hidden');
		}
	});


	/* ===============
    	Local Storage
       ===============*/

       var setLocalArtigo = function(img, nome, ref, dim, versao){
       		localStorage.setItem("artigoImg", img);
       		localStorage.setItem("artigoNome", nome);
       		localStorage.setItem("artigoRef", ref);
       		localStorage.setItem("artigoDim", dim);
       		localStorage.setItem("versaoDark", versao);
       		window.location.replace("single");
       }

       /* Actualizar cookie seccao */

       var actualCookieSeccao = function(actual){
       		document.cookie = "seccao=" + actual;
       }

</script>
