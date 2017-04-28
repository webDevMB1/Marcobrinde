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
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>

	$(document).ready(function(){
		$(".memenu").memenu();
	});

</script>
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

<style>
	.simpleCart_items table {
		width:100%;
		overflow: auto;
	}
</style>

</head>
<body>

<?php

	require_once('header.php');
?>

<div class="container">
	<div class="check">	 
		 <div class="col-md-9 cart-items simpleCart_items" style="margin-bottom: 35px"></div>
		  <div class="col-md-3 cart-total">
			 <a class="continue" href="#" onclick="changeGaleria('diversos')">Continuar a comprar</a>
			 <div class="price-details">
				 <h3>Detalhes Preço</h3>
				 <span>Total em artigos</span>
				 <span class="simpleCart_total"></span>
				 <span>Portes</span>
				 <span id="portes" class="total1"></span>
				 <div class="divider" style="margin-top: 26%"></div>
				 <br>
			 	<h3>Entregas</h3>	
				 <label style="font-size: 12px"><input id="entregaCasa" type="radio" name="entrega" onclick="calculaPortes(true);"> Morada</label><br>
				 <label style="font-size: 12px"><input id="entregaMB" type="radio" name="entrega" onclick="calculaPortes(false)"> Loja</label>
				 <div id="alertEntrega" class="alert alert-danger hidden" role="alert" style="margin-left: 1.5%; margin-top: 10%">
				  <p style="font-size: 10px">Campo de preenchimento obrigatório.</p>
				</div>
				<br>
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <h4><li id="valTotal"></li></h4>
			 </ul>
			 <div class="clearfix"></div>
				 <a id="finalCompra" class="order" href="#" onclick="finalizaCompra()">Finalizar Compra</a>
			 </div>
		<div class="clearfix"> </div>
		 <div id="infoEntrega">
			<div class="divider"></div>
		 	<center>
			 	<strong><p style="margin-top: 4%">Entrega até 5 dias uteis após confirmação do pagamento.</p>
			 	<p>No caso de estar no estrangeiro, por favor contacte-nos através de <a href="contact.php">apoio.marcobrinde@gmail.com</a> antes de efectuar a sua compra.</p></strong>
			 </center>
		 </div>
	 </div>
</div>


<?php
	require_once('footer.php');
?>

</body>
</html>

<style type="text/css">

	.simpleCart_increment, .simpleCart_decrement{
		background-color: black;
		color: white;
		padding-left: 7.5px;
		padding-right: 7.5px;
		text-decoration: none;
	}

	.simpleCart_increment:hover, .simpleCart_decrement:hover{
		background-color: white;
		color: black;
		text-decoration: none;
	}

	.simpleCart_items > div > .headerRow {
	}

	.item-name{
	  display: inline;
	 }

	.item-price{
	  display: inline;
	}

	.item-quantity{
		display: inline;
		padding-left: -3%;
	}

	.item-total{
		display: inline;
	}

	.item-decrement{
		display: inline;
	}

	.item-increment{
		display: inline;
	}

	.item-remove{
		display: inline;
	}

</style>
			
<script type="text/javascript">

	changeTituloSeccao("Carrinho");

	$(window).load(function(){
		estiloCheckout();
		
		$(".simpleCart_remove").click(function(){
			location.reload();
		});

		$(".simpleCart_decrement").click(function(){
			location.reload();
		});

		$(".simpleCart_increment").click(function(){
			location.reload();
		});

		$("#esvaziar").click(function(){
			location.reload();
		});




		var carrinhoEmail = $(".simpleCart_items").html();
		var strLink = "formulario.php&artigos=" + "\"" + carrinhoEmail + "\"";
		//console.log(strLink);

		//$("#finalCompra").attr("href",strLink);
		$(".item-ref").remove();

		//adicionar portes ao campo quando a pagina é aberta
		$("#portes").text("€0.00");

		/* calcular valor total compra (artigos sem portes) */

		var totalArtigos = $(".simpleCart_total").toArray();
		var valorArtigos = $(totalArtigos[1]).text().split("€")[1];
		var totalCompra = parseFloat(valorArtigos);

		$("#valTotal").text("€" + totalCompra);

		$.cookie("valorCompra", totalCompra);

		checkZeroArtigos();

	});

	var calculaPortes = function(casa){
		if(casa == true){
			$("#portes").text("€"+ ajustaPortes(true));
			ajustaPortes(true);
		}else{
			$("#portes").text("€"+ ajustaPortes(false));
			ajustaPortes(false);
		}

		var totalArtigos = $(".simpleCart_total").toArray();
		var valorArtigos = $(totalArtigos[1]).text().split("€")[1];
		var valorPortes = $("#portes").text().split("€")[1];
		var totalCompra = parseFloat(valorArtigos) + parseFloat(valorPortes);

		$("#valTotal").text("€" + totalCompra);

		$.cookie("valorCompra", totalCompra);
		$.cookie("valorPortes", valorPortes);
	}

	var finalizaCompra = function(){

		if(! $("#entregaCasa").is(':checked') && !$("#entregaMB").is(':checked')){
			$("#alertEntrega").removeClass("hidden");
			return;
		}else{
			window.location.replace("formulario.php");
		}
	}

</script>