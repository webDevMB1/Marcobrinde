<!DOCTYPE html>
<html>
<head>
<title>MarcoBrinde Loja Online- Contacto</title>
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
<!--content-->
<div class="contact">
			
			<div class="container">
			<div class="contact-form">
				
				<div class="col-md-8 contact-grid">
					<form name="formContacto" id="formContacto" action="emailContacto.php" method="post">
						<input type="text" id="contactNome" name="nome" placeholder="Nome" required>
						<input type="text" id="contactEmail" name="email" placeholder="Email" required>
						<input type="text" id="contactAssunto" name="assunto" placeholder="Assunto" required>
						<textarea id="contactMensagem" name="mensagem" cols="77" rows="6" placeholder="Mensagem" required></textarea>
						<div class="send">
							<!--<a class="btn btn-lg" width="100%" style="border-radius: 0" id="submit">Enviar</a>-->
							<input type="submit" value="Enviar" style="width: 100%">
						</div>
					</form>
				</div>
				<div class="col-md-4 contact-in">

						<div class="address-more">
						<h4>Endereço</h4>
							<p>MarcoBrinde</p>
							<p>Zona Industrial da Lagoa</p>
							<p>4950-850 Cortes Monção</p>
						</div>
						<div class="address-more">
						<h4>Contacto</h4>
							<p>Tel: 251 654 317</p>
							<p>Email: webdesigner.mb@gmail.com</p>
						</div>
						<div class="address-more">
						<h4>Horário</h4>
							<p>Segunda a Sexta<p>
							</p>8:30h/12:30h : 14h/18:30h</p>
							<p>Sábado<p>
							</p>9h/12:30h</p>
						</div>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d656.1292217127174!2d-8.509244597263303!3d42.06318954911575!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0a2ad151468a3aa!2sMarcobrinde+Sociedade+Unipessoal+Lda!5e1!3m2!1spt-PT!2spt!4v1488819083312"></iframe>
			</div>
		</div>
		
	</div>

<?php
	require_once('footer.php');
?>

</body>
</html>
			
<script type="text/javascript">
	/* Adicionar titulo "Contactos" Barra Menu*/
	changeTituloSeccao("Contacto");

	/*$("#submit").click(function(){

		if(checkFieldsContact() == true){
			var cNome = $("#contactNome").val();
			var cEmail = $('#contactEmail').val();
			var cAssunto = $("#contactAssunto").val();
			var cMensagem = $("#contactMensagem").val();

			$.ajax({
			        type: 'POST',
			        url: 'emailContacto.php',
			        data: { nome: cNome,
			        		email: cEmail,
			        		assunto: cAssunto,
			        		mensagem: cMensagem}
			    });

			alert('Email enviado com sucesso! Entraremos em contacto assim que possivel.');
			window.location = 'indexLoja.php';

		}

	});

	var checkFieldsContact = function(){
		var check = true;

		if($("#contactNome").val() === ""){
			esconderAlerts();
			$("#contactNome").css("background-color", "rgba(255,0,0,0.2)");
			$("#contactNome").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#contactEmail").val() === ""){
			esconderAlerts();
			$("#contactEmail").css("background-color", "rgba(255,0,0,0.2)");
			$("#contactEmail").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#contactAssunto").val() === ""){
			esconderAlerts();
			$("#contactAssunto").css("background-color", "rgba(255,0,0,0.2)");
			$("#contactAssunto").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}else if($("#contactMensagem").val() === ""){
			esconderAlerts();
			$("#contactMensagem").css("background-color", "rgba(255,0,0,0.2)");
			$("#contactMensagem").attr("placeholder","Campo de preenchimento obrigatório.");
			check = false;
		}

		if(check == true){
			esconderAlerts();
		}

		return check;
	}

	var esconderAlerts = function(){
		$("#contactNome").css("background-color", "white");
		$("#contactEmail").css("background-color", "white");
		$("#contactAssunto").css("background-color", "white");
		$("#contactMensagem").css("background-color", "white");
	}*/

</script>