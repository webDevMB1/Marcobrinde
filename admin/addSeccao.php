<!DOCTYPE html>
<html>
<head>
	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	
	<link rel="icon" href="../images/logo/icon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Marcobrinde website roupa brindes toldos reclamos design imagem grafica adicionar seccao" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- css files -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!-- /css files -->
	<!-- fonts -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- /fonts -->

	<title>ADMIN - Adicionar Secção</title>
</head>
<body>


	<!-- ROW Logo -->
	<div id="rowLogo" class="row">
		<a href="index.html"><img id="logoImg" src="../images/index/10l.png" alt="logo" height="110" style="padding-bottom: 10px"></a>
	</div>

<div class="container">

	<div id="descricaoSeccao" class="row">
		<center>
			<h2>Adicionar Secção</h2>
			<br>
			<p>Esta area adiciona uma nova secção de transfers.</p>
			<p>As edições feitas aqui, alteram a tabela "recentes_transfers" na Base de Dados. Troca a informação existente na tabela com a informação inserida aqui.</p>
		</center>
	</div>

	<hr>

	<div id="explicacao" class="row">
		<center><h4><strong>ATENÇÃO</strong></h4></center>
		<br>
		<p>Esta área efectua alterações tanto a nível de website como a nível de Base de Dados e pastas dos transfers. Ao adicionar uma nova secção está a ser adicionada uma nova entrada à listagem "Produtos" no menu da Loja, a ser criada uma nova tabela na BD, sobre o nome "transfers_" + o nome da secção e está ainda a ser criada uma nova pasta dentro da pasta "transfers". </p>
	</div>

	<hr>

	<form name="form"> 
		<div id="parentDiv">
			<!-- ============================================== ROW PRIMEIRO TRANSFER ============================================= -->
			<div class="row">

				<h2 id="trans1">Nova Secção</h2>
				<br>

				 <!-- ================== Row 1 Inputs ==================== -->
			 	<div class="row marBot">
			 		<div class="col-md-2">
				    	<h4>Nome</h4>
				    	<input type="text" id="nomeSeccao" name="nome" placeholder="Nome">
			    	</div>
		    	</div>

			    <hr>

			</div> <!-- /row -->

		</div>

		 <!-- ================== Row Button Update ==================== -->
	    <div class="row">
			<!--<a class="btn btn-lg" width="100%" style="border-radius: 0" id="submit">Enviar</a>-->
			<input id="addSection" class="updateButton" type="submit" value="ADICIONAR">
	    </div>

    </form>

</div><!-- /container -->
	
<footer id="footerSeccao">
	<div class="linhaFooter"></div>
    <p id="copyright">© 2017 MarcoBrinde</p>
</footer>


</body>

<script type="text/javascript">


    $(window).load(function(){

    	$("#addSection").click(function(){

    			var mNomeSeccao = $("#nomeSeccao").val();

				$.ajax({
			        type: 'POST',
			        url: 'PHPaddSection.php',
			        data: { nome: mNomeSeccao },
				    success: function(){
				   		alert('Nova secção adicionada com sucesso!'); 		
				    },
				    error: function(){
				    	alert('Não foi possível adicionar uma nova secção.');
				    }
			  	});


    	});

    });

</script>
<!-- JS Files -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--//\\ -->

</html>