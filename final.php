<!DOCTYPE html>
<html>
<head>
<title>MarcoBrinde Loja Online - Finalizar</title>
<link rel="icon" href="images/logo/icon.jpg" />
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

				<!-- Linha Agradecimento -->
				<div class="row">
					<div class="col-md-12">
						<center>
							<h3>Obrigado por comprar na loja online MarcoBrinde.</h3>
							<br>
							<div class="divider"></div>
						</center>
					</div>
				</div>

				<br><br/>

				<!-- Linha Button -->
				<div id="rowButton" class="row">
					<center>
						<div class="col-md-12">
							<a href="javascript:;" class="btn btn-lg simpleCart_empty" width="100%" style="border-radius: 0" id="voltarInicio">Voltar ao inicio</a>
						</div>
					</center>
				</div>

				<style type="text/css">
					#voltarInicio{
						background-color: black;
						color: white;
						width: 50%;
					}

					#voltarInicio:hover{
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

	/* Limpar cookies, sessions e carrinho */

	$(window).load(function(){

		var cookies = document.cookie.split(";");
		for(var i=0; i < cookies.length; i++) {
		    var equals = cookies[i].indexOf("=");
		    var name = equals > -1 ? cookies[i].substr(0, equals) : cookies[i];
		    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
		}

		/* AJAX para votacao no site */

		$("#voltarInicio").click(function(){

			<?php
				session_destroy();
			?>
			
			localStorage.clear();
			window.location.replace("indexLoja.php");
		});

	});

</script>