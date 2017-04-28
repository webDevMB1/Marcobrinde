<!DOCTYPE html>
<html>
<head>
<title>MarcoBrinde Loja Online - Pagamento</title>
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

	<div id="emailTransferencia" class="hidden"></div>
	<div id="artigosTransferencia" class="hidden"></div>
	<div id="cartForm" name="cartForm" class="simpleCart_items hidden"></div>

<?php
	
	require_once('header.php');
?>

		<div class="product">
			<div class="container" style="text-align: center">

				<!-- Linha titulos -->
					<div class="col-md-6">
						<h3>Pagamento por Multibanco / Payshop</h3>
						<br>
						<center>
							<div id="divHipay" class="col-md-6" style="margin-left: 25%"></div>
						</center>
					</div>
					<div class="col-md-6">
						<h3>Pagamento por Transferência</h3>
						<br>
						<a class="btn btn-lg" width="100%" style="border-radius: 0" id="buttonTransferencia">Comprar</a>
					</div>

				<style type="text/css">
					#buttonTransferencia{
						background-color: black;
						color: white;
						width: 60%;
					}

					#buttonTransferencia:hover{
						background-color: white;
						color: black;
					}
				</style>
			</div>
		</div>

<?php
	require_once('footer.php');
?>

</body>
</html>

<script type="text/javascript">
	
	$(window).load(function(){

		/* Limpar campos desnecessarios do carrinho */
		$(".item-decrement").remove();
		$(".item-increment").remove();
		$(".item-remove").remove();
		$(".item-thumb").remove();
		$(".headerRow").html("");


		$("#emailTransferencia").text(localStorage.getItem("emailTransferencia"));
		checkZeroArtigos();

		/* BUTTON POR TRANSFERENCIA */
		$("#buttonTransferencia").click(function(){
			$.ajax({
			        type: 'POST',
			        url: 'emailTransferencia.php',
			        data: { email: $("#emailTransferencia").text(),
			        		valor: $(".simpleCart_total").text().split("€")[1]}
			    });
			window.location.replace("asdjkRBPN.php");
		});


		/* Esconder button Transferencia e hipay se carrinho estiver vazio */
		if($("#valor").text() === "€0.00"){
		    $("#buttonTransferencia").addClass("hidden");
		    $("#divHipay").addClass("hidden");
		}else{
			$("#divHipay").removeClass("hidden");
			$("#buttonTransferencia").removeClass("hidden");
	    }

		if($(window).width() < 992){
			$("#divHipay").css("margin-left", "0");
		}

		/* Reload à pagina quando esvaziar o carrinho */

		$("#esvaziar").click(function(){
			location.reload();
		});



			/* 
			 * Preencher var items com os valores reais do carrinho 
			 */

			 items = "";
			var count = 1;

			$(".itemRow").each(function(){
				$this = $(this);
				var nome = $this.find(".item-name").text();
				var cor = $this.find(".item-color").text();
				var referencia = $this.find(".item-ref").text();
				var tamanho = $this.find(".item-size").text();
				var preco = $this.find(".item-price").text().split("€")[1];
				var quantidade = $this.find(".item-quantity").text();
				var total = $this.find(".item-total").text();

				items = items + "<item id='"+ count +"'><name>"+ nome +"</name><infos>"+ cor +", "+ tamanho +"</infos><amount>"+ preco +"</amount><categoryId>331</categoryId><quantity>"+ quantidade +"</quantity><reference>"+ referencia +"</reference></item>";
				count++;
			});
			
			var totalComPortes = $.cookie("valorPortes");

			items = items + " <item id='portes'><name>Portes</name><infos>Valor total com portes</infos><amount>"+ totalComPortes +"</amount><categoryId>331</categoryId><quantity>1</quantity><reference>#portes</reference></item> ";

			$("#artigosTransferencia").text(items); 
			console.log("items: " + items);

			//Post para poder utilizar a variavel no PHP
			$.ajax({
				type: "POST",
				url: 'pagaInfo.php',
				data: { 'itemsPHP' : items },
				success: function(response){
					$("#divHipay").html(response);	
				}
			});

		

	});

</script>