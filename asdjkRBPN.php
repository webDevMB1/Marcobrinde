<!DOCTYPE html>
<html>
<head>
<title>MarcoBrinde Loja Online - Votação</title>
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
							<div id="alertVotacao" class="alert alert-danger hidden" role="alert">
								<p>Por favor avalie o nosso website antes de avançar.</p>
							</div>

							<h3>A sua opinião é importante para nós.</h3>
							<br>
							<div class="divider"></div>
							<br></br>
							<strong><p>Atendendo à estrutura, facilidade de navegação e variedade de transfers, por favor avalie o nosso site.</p></strong>
							<br>
							<label class="radio-inline"><input type="radio" name="votacao" val="5">5 * (Muito Bom)</label>
							<label class="radio-inline"><input type="radio" name="votacao" val="4">4 * (Bom)</label>
							<label class="radio-inline"><input type="radio" name="votacao" val="3">3 * (Razoável)</label>
							<label class="radio-inline"><input type="radio" name="votacao" val="2">2 * (Mau)</label>
							<label class="radio-inline"><input type="radio" name="votacao" val="1">1 * (Muito Mau)</label>
							<br></br>
							<p><u>Esta votação é anónima e serve apenas para avaliar o grau de satisfação dos nossos clientes face ao website.</u></p>
						</center>
					</div>
				</div>

				<br><br/>

				<!-- Linha Button -->
				<div id="rowButton" class="row">
					<center>
						<div class="col-md-12">
							<a href="javascript:;" class="btn btn-lg" width="100%" style="border-radius: 0" id="avancar">Avançar <i src="images/next.png" style="width: 50%"></i></a>
						</div>
					</center>
				</div>

				<style type="text/css">
					#avancar{
						background-color: black;
						color: white;
						width: 50%;
					}

					#avancar:hover{
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

		/* AJAX para votacao no site */

		$("#avancar").click(function(){

			if(!$('input[name=votacao]:checked').attr("val")){
				$("#alertVotacao").removeClass("hidden");
			}else{

				$("#alertVotacao").addClass("hidden");

				$.ajax({
				        type: 'POST',
				        url: 'votaSite.php',
				        data: { votacao: $('input[name=votacao]:checked').attr("val")}
				    });

				window.location.replace("pagamento.php");
			}

		});

	});

</script>