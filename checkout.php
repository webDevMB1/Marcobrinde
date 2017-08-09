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
			 	<p>No caso de estar no estrangeiro, por favor contacte-nos através de <a href="contacto">apoio.marcobrinde@gmail.com</a> antes de efectuar a sua compra.</p></strong>
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

	/* Cortar a table para caber no responsivo */
	table {
	   table-layout:fixed;
	   width: 100%;
	}

	.headerRow th{
		width: 100%;
	}

	.itemRow th{
		width: 100%;
	}

	.itemRow .item-color{
		word-wrap: break-word;
	}
</style>

<script type="text/javascript">

	changeTituloSeccao("Carrinho");

	$(window).load(function(){

		/* controlo de cor - substituir nome por quadrado */
	  	  $.each($(".itemRow").find(".item-color"), function(num, result){
	  	  	switch($(result).html()) {
			    case "Vermelho":
			    	colocarCorTshirtCheckout(result, "red");
			        break;
			    case "Preto":
			        colocarCorTshirtCheckout(result, "black");
			        break;
			    case "Verde":
			    	colocarCorTshirtCheckout(result, "green");
			    	break;
			   	case "Azul Royal":
			   		colocarCorTshirtCheckout(result, "#3A4D91");
			   		break;
			   	case "Azul Marinho":
			   		colocarCorTshirtCheckout(result, "#313852");
			   		break;
		   		case "Azul Ciano":
			   		colocarCorTshirtCheckout(result, "#2B86B3");
			   		break;
			   	case "Areia":
			   		colocarCorTshirtCheckout(result, "#DDC59F");
			   		break;
			   	case "Laranja":
			   		colocarCorTshirtCheckout(result, "orange");
			   		break;
			   	case "Verde Tropa":
			   		colocarCorTshirtCheckout(result, "#585B46");
			   		break;
			   	case "Branco":
			   		colocarCorTshirtCheckout(result, "#F1F1F1");
			   		break;
			   	case "Cinza Escura":
			   		colocarCorTshirtCheckout(result, "darkgrey");
			   		break;
			   	case "Verde Maçã":
			   		colocarCorTshirtCheckout(result, "#CCD554");
			   		break;
			   	case "Orquidea":
			   		colocarCorTshirtCheckout(result, "#CC76A7");
			   		break;
			   	case "Rosa":
			   		colocarCorTshirtCheckout(result, "#A20C63");
			   		break;
			   	case "Amarelo":
			   		colocarCorTshirtCheckout(result, "yellow");
			   		break;
			   	case "Azul":
			   		colocarCorTshirtCheckout(result, "blue");
			   		break;
			   	case "Camel":
			   		colocarCorTshirtCheckout(result, "#9C8768");
			   		break;
			   	case "Rosetón":
			   		colocarCorTshirtCheckout(result, "#EC3B72");
			   		break;
			   	case "Chocolate":
			   		colocarCorTshirtCheckout(result, "#3E3027");
			   		break;
			   	case "Gris Vigoré":
			   		colocarCorTshirtCheckout(result, "#BEBEBE");
			   		break;
			   	case "Caqui":
			   		colocarCorTshirtCheckout(result, "#52563F");
			   		break;
			   	case "Azul Porto":
			   		colocarCorTshirtCheckout(result, "#033653");
			   		break;
			   	case "Magenta":
			   		colocarCorTshirtCheckout(result, "#C44280");
			   		break;
			   	case "Cinza Marengo":
			   		colocarCorTshirtCheckout(result, "#A7A6AE");
			   		break;
			   	case "Antracite":
			   		colocarCorTshirtCheckout(result, "#424242");
			   		break;
		   		case "Azul Marengo":
			   		colocarCorTshirtCheckout(result, "#7E85A1");
			   		break;
			   	case "Cinza":
			   		colocarCorTshirtCheckout(result, "grey");
			   		break;
			}
	  	  }); 


		/* Responsive checkout */

		$(window).resize(function() {

		  if($(window).width() < 650){

		  	  if ($(window).width() < 385) {
	          	$(".item-thumb").addClass("hidden");
	          	$(".item-price").addClass("hidden");
	          	$(".item-total").addClass("hidden");
	          	$(".item-remove").addClass("hidden");
	          	$(".headerRow").find(".item-quantity").text("Qnt.");
	          }else{
	          	$(".item-thumb").removeClass("hidden");
	          	$(".item-price").removeClass("hidden");
	          	$(".item-total").removeClass("hidden");
	          	$(".item-remove").removeClass("hidden");
	          }

	          $(".item-thumb").addClass("hidden");
		  	  $(".item-price").addClass("hidden");

		  }else{
		  	$(".item-thumb").removeClass("hidden");
		  	$(".item-price").removeClass("hidden");
		  }

          
        });

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

	}); // load

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
			window.location.replace("formulario");
		}
	}

	var colocarCorTshirtCheckout = function(result, cor){
		return $(result).html("<span id=\"spanCor\" style=\"border-left: solid 10px white; border-right: solid 20px "+ cor +"\"></span>");;
	}

</script>
