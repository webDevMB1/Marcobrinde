<!DOCTYPE html>
<html>
<head>
<title>MarcoBrinde Loja Online - Formulário</title>
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

						<?php
							include('connectBD.php');

							$sql = "Select cardinal, MAX( id ) + 1 from numero_encomenda";
						 	$result = mysqli_query($db, $sql);

						 	while($row = mysqli_fetch_array($result)){
							 	echo '<h4 id="numEnc">Encomenda nº: ' . $row['cardinal'] . $row['MAX( id ) + 1'] . '</h4>';
						 	}

						 	mysql_close($db);

						?>

						<br>
						<form name="formDetEnvio" id="formDet">
						<!-- ==== Nome ==== -->
						  <div class="form-group">
						    <label for="nome">Nome</label>
						    <input name="nome" type="text" class="form-control" id="formNome" placeholder="Nome">
						  </div>

						  <!-- ==== Email ==== -->
						  <div class="col-md-6 padding0">
							  <div class="form-group">
							    <label for="email">Email</label>
							    <input name="email" type="email" class="form-control" id="formEmail" placeholder="Email">
							  </div>
						  </div>

						  <!-- ==== Telefone ==== -->
						  <div class="col-md-6 padding0">
							  <div class="form-group">
							    <label for="telefone">Telefone</label>
							    <input name="telefone" type="tel" class="form-control" id="formTelefone" placeholder="Telefone">
							  </div>
						   </div>

						   <!-- ==== Morada Fatura ==== -->
						  <div class="form-group">
						    <label for="moradaFatura">Morada de Faturação</label>
						    <input name="moradaFatura1" type="text" class="form-control" id="formMoradaFatura" placeholder="Morada Faturação">
						  </div>

						  <div class="col-md-6 padding0">
							  <div class="form-group">
							    <label for="localFatura">Localização</label>
							    <input name="localFatura" type="text" class="form-control" id="formLocalFatura">
							  </div>
						  </div>

						  <div class="col-md-1 padding0">
							  <div class="form-group">
							    <label for="codePostalFatura">Código Postal</label>
							    <input name="codePostalFatura" type="text" class="form-control" id="formCodePostalFatura" maxlength="4">
							  </div>
						  </div>

						  <div class="col-md-1 padding0">
							  <div class="form-group">
							    <label for="codePostalFatura2"></label>
							    <input name="codePostalFatura2" type="text" class="form-control" id="formCodePostalFatura2" maxlength="3">
							  </div>
						  </div>

						  <!-- ==== NIF ==== -->
						  <div class="col-md-6 padding0">
							  <div class="form-group">
							    <label for="nif">NIF</label>
							    <input name="nif" type="text" class="form-control" id="formNIF" placeholder="NIF">
							  </div>
						  </div>

						  <!-- ==== Morada Fatura ==== -->
						  <div class="col-md-12 padding0">
							  <div class="form-group">
							    <label for="moradaEnvio">Morada de Envio</label>
							    <input name="moradaEnvio" type="text" class="form-control" id="formMoradaEnvio" placeholder="Morada Envio">
							  </div>
						  </div>

						  <div class="col-md-6 padding0">
							  <div class="form-group">
							    <label for="localEnvio">Localização</label>
							    <input name="localEnvio" type="text" class="form-control" id="formLocalEnvio">
							  </div>
						  </div>

						  <div class="col-md-1 padding0">
							  <div class="form-group">
							    <label for="codePostalEnvio1">Código Postal</label>
							    <input name="codePostalEnvio1" type="text" class="form-control" id="formCodePostalEnvio1" maxlength="4">
							  </div>
						  </div>

						  <div class="col-md-1 padding0">
							  <div class="form-group">
							    <label for="codePostalEnvio2"></label>
							    <input name="codePostalEnvio2" type="text" class="form-control" id="formCodePostalEnvio2" maxlength="3">
							  </div>
						  </div>

						  <!-- ==== Detalhes ==== -->
						  <div class="col-md-12 padding0">
							  <div class="form-group">
							    <label for="textareaDetalhes">Espaço para mais detalhes</label>
							    <textarea name="mDetalhes" class="form-control" id="formDetalhes" rows="3"></textarea>
							  </div>
						  </div>

						  <!-- Hidden com os artigos presentes no carrinho-->
						  <div id="cartForm" name="cartForm" class="simpleCart_items hidden"></div>
						  <div class="portes"></div>
						  <div class="col-md-12 padding0">
						  <a class="btn btn-lg" width="100%" style="border-radius: 0" id="submit">Avançar</a>
						  </div>
						</form>
					</div>
				</div>

				<div class="clearfix"></div>
			</div>
		</div>

		<style type="text/css">
			#submit{
				background-color: black;
				color: white;
			}

			#submit:hover{
				background-color: white;
				color: black;
			}
		</style>

<?php
	require_once('footer.php');
?>

</body>
</html>

<script type="text/javascript">

	$(window).load(function(){
		//var artigos = $("#cartForm").html();
		//$("#hiddenArtigosCarrinho").text(artigos);


		$(".item-decrement").remove();
		$(".item-increment").remove();
		$(".item-remove").remove();
		$(".item-thumb").remove();

		/*$(".item-thumb").find("img").attr("src",function(index, src){
													return 'http://www.cresposonline.pt/' + src;
												});
		$(".item-thumb").find("img").css("width", "20%");
		$("td .item-thumb").css("margin", "0");*/
		$("th").css("padding-left","10px");
		$("th").css("padding-right","10px");
		$("td").css("padding-left","10px");
		$("td").css("padding-right","10px");

		$("#submit").click(function(){

			if(checkFieldsForm() == true){
				var sDetalhes = $("#formDetalhes").val();
				var sArtigos = $('#cartForm').html();
				var sNome = $("#formNome").val();
				var sEmail = $("#formEmail").val();
				var sTelefone = $("#formTelefone").val();
				var sMoradaFatura1 = $("#formMoradaFatura").val();
				var sLocalFatura = $("#formLocalFatura").val();
				var sCodePostalFatura = $("#formCodePostalFatura").val();
				var sCodePostalFatura2 = $("#formCodePostalFatura2").val();
				var sNif = $("#formNIF").val();
				var sMoradaEnvio = $("#formMoradaEnvio").val();
				var sLocalEnvio = $("#formLocalEnvio").val();
				var sCodePostalEnvio1 = $("#formCodePostalEnvio1").val();
				var sCodePostalEnvio2 = $("#formCodePostalEnvio2").val();
				var sGetNumEncomenda = $("#numEnc").text().split(": ")[1];
				var totalComPortes = $.cookie("valorCompra");

				localStorage.setItem("emailTransferencia", sEmail);

				getUpdateFile();

				$.ajax({
			        type: 'POST',
			        url: 'email.php',
			        data: { nome: sNome,
			        		email: sEmail,
			        		telefone: sTelefone,
			        		moradaFatura1: sMoradaFatura1,
			        		localFatura: sLocalFatura,
			        		codePostalFatura: sCodePostalFatura,
			        		codePostalFatura2: sCodePostalFatura2,
			        		nif: sNif,
			        		moradaEnvio: sMoradaEnvio,
			        		localEnvio: sLocalEnvio,
			        		codePostalEnvio1: sCodePostalEnvio1,
			        		codePostalEnvio2: sCodePostalEnvio2,
			        		mDetalhes: sDetalhes,
			        		artigos: sArtigos,
			        		valCompra: totalComPortes,
			        		numeroEncomenda: sGetNumEncomenda}
			    });
			    window.location.replace("asdjkRBPN");
			}


		});

		/* Esconder button avançar se carrinho estiver vazio */
		if($("#valor").text() === "€0.00"){
			    $("#submit").addClass("hidden");
			}else{
				$("#submit").removeClass("hidden");
	        }
	});


	var getUpdateFile = function(){
		$.get('updateBDNum.php');
		return false;
	}

	var checkFieldsForm = function(){
		var check = true;

		if($("#formNome").val() === ""){
			esconderAlerts();
			$("#formNome").addClass("alert-danger");
			$("#formNome").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#formEmail").val() === ""){
			esconderAlerts();
			$("#formEmail").addClass("alert-danger");
			$("#formEmail").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#formTelefone").val() === ""){
			esconderAlerts();
			$("#formTelefone").addClass("alert-danger");
			$("#formTelefone").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#formMoradaFatura").val() === ""){
			esconderAlerts();
			$("#formMoradaFatura").addClass("alert-danger");
			$("#formMoradaFatura").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#formLocalFatura").val() === ""){
			esconderAlerts();
			$("#formLocalFatura").addClass("alert-danger");
			$("#formLocalFatura").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#formCodePostalFatura").val() === ""){
			esconderAlerts();
			$("#formCodePostalFatura").addClass("alert-danger");
			$("#formCodePostalFatura").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#formCodePostalFatura2").val() === ""){
			esconderAlerts();
			$("#formCodePostalFatura2").addClass("alert-danger");
			$("#formCodePostalFatura2").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#formNIF").val() === ""){
			esconderAlerts();
			$("#formNIF").addClass("alert-danger");
			$("#formNIF").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#formMoradaEnvio").val() === ""){
			esconderAlerts();
			$("#formMoradaEnvio").addClass("alert-danger");
			$("#formMoradaEnvio").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#formLocalEnvio").val() === ""){
			esconderAlerts();
			$("#formLocalEnvio").addClass("alert-danger");
			$("#formLocalEnvio").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#formCodePostalEnvio1").val() === ""){
			esconderAlerts();
			$("#formCodePostalEnvio1").addClass("alert-danger");
			$("#formCodePostalEnvio1").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#formCodePostalEnvio2").val() === ""){
			esconderAlerts();
			$("#formCodePostalEnvio2").addClass("alert-danger");
			$("#formCodePostalEnvio2").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}

		return check;
	}

	var esconderAlerts = function(){
		$("#formNome").removeClass("alert-danger");
		$("#formEmail").removeClass("alert-danger");
		$("#formTelefone").removeClass("alert-danger");
		$("#formMoradaFatura").removeClass("alert-danger");
		$("#formLocalFatura").removeClass("alert-danger");
		$("#formCodePostalFatura").removeClass("alert-danger");
		$("#formCodePostalFatura2").removeClass("alert-danger");
		$("#formNIF").removeClass("alert-danger");
		$("#formMoradaEnvio").removeClass("alert-danger");
		$("#formLocalEnvio").removeClass("alert-danger");
		$("#formCodePostalEnvio1").removeClass("alert-danger");
		$("#formCodePostalEnvio2").removeClass("alert-danger");
	}


</script>
