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

	<title>ADMIN - Adicionar Transfer</title>
</head>
<body>


	<!-- ROW Logo -->
	<div id="rowLogo" class="row">
		<a href="index.html"><img id="logoImg" src="../images/index/10l.png" alt="logo" height="110" style="padding-bottom: 10px"></a>
	</div>

<div class="container">

	<div id="descricaoSeccao" class="row">
		<center>
			<h2>Adicionar Transfer</h2>
			<br>
			<p>Esta area adiciona um novo transfer à secção escolhida.</p>
			<p>A informação introduzida aqui é adicionada à respectiva tabela na Base de Dados.</p>
		</center>
	</div>

	<hr>

	<div id="explicacao" class="row">
		<center><h4><strong>ATENÇÃO</strong></h4></center>
		<br>
		<p>Esta área efectua alterações a nível da Base de Dados e pastas dos transfers. Ao adicionar um novo transfer está a ser adicionada uma nova entrada à tabela escolhida na Base de Dados e as imagens (normal e para fundos escuros) estão a ser adicionadas à pasta. </p>
	</div>

	<hr>

	<form name="form"> 
		<div id="parentDiv">
			<!-- ============================================== ROW PRIMEIRO TRANSFER ============================================= -->
			<div class="row">

				<h2 id="seccaoEscolha">Escolha a secção</h2>
				<br>

				 <!-- ================== Row 1 Inputs ==================== -->
			 	<div class="row marBot">
			 		<div class="col-md-3">
				    	<ul class="nav navbar-nav">
			                <li id="dropdownProdutos" class="dropdown" style="margin-right: 25px">
			                  <a href="#" id="products" class="dropdown-toggle buttonDropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black; background-color: white">Produtos <span class="caret"></span></a>
			                  <ul class="dropdown-menu">

				                  <?php
				                  	require_once("../lista.php");
				                  ?>
			                  
			                  </ul>
			                </li>
			              </ul>
			    	</div>
		    	</div>

		    	<div id="avisoSeccao" class="alert alert-danger hidden">
		    		<strong>Aviso!</strong> Por favor seleccione uma secção.
		    	</div>

			    <hr>

			</div> <!-- /row -->

			<div class="row marBot">

				<h2 id="infoTransfer">Detalhes do transfer</h2>
				<br>

		 		<div class="col-md-2">
			    	<h4>Nome</h4>
			    	<input type="text" id="tNome" name="nome" placeholder="Nome" required>
		    	</div>
		    	<div class="col-md-2">
			    	<h4>Referência</h4>
			    	<input type="text" id="tReferencia" name="referencia" placeholder="Referência" required>
		    	</div>
		    	<div class="col-md-2">
		    		<h4>Dimensões</h4>
		    		<input type="text" id="tDimensoes" name="dimensoes" placeholder="Dimensoes" required>
		    	</div>
		    	<div class="col-md-2">
		    		<h4>Link</h4>
		    		<input type="text" id="tLink" name="link" placeholder="Link" required>	
		    	</div>
		    	<div class="col-md-2">
	    			<h4>Link Versão Dark</h4>
		    		<input type="text" id="tLinkDark" name="link dark" placeholder="Link Dark">	
	    		</div>
	    	</div>

	    	<hr>

		</div>

		 <!-- ================== Row Button Update ==================== -->
	    <div class="row">
			<!--<a class="btn btn-lg" width="100%" style="border-radius: 0" id="submit">Enviar</a>-->
			<input id="addTransfer" class="updateButton" type="submit" value="ADICIONAR">
	    </div>

    </form>

</div><!-- /container -->
	
<footer id="footerAddTransfer">
	<div class="linhaFooter"></div>
    <p id="copyright">© 2017 MarcoBrinde</p>
</footer>


</body>

<script type="text/javascript">


    $(window).load(function(){

    	$("#addTransfer").click(function(){


    			var seccaoEscolhida = $.trim($("#products").text());
    			var eNome = $("#tNome").val();
    			var eReferencia = $("#tReferencia").val();
    			var eDimensoes = $("#tDimensoes").val();
    			var eLink = $("#tLink").val();
    			var eLinkDark = $("#tLinkDark").val();

    			if(seccaoEscolhida != "Produtos"){
    				$("#avisoSeccao").addClass("hidden");

    				if(eNome && eReferencia && eDimensoes && eLink ){

	    				$.ajax({
					        type: 'POST',
					        url: 'PHPaddTransfer.php',
					        data: { seccao: seccaoEscolhida,
					        		nome: eNome,
					        		referencia: eReferencia,
					        		dimensoes: eDimensoes,
					        		link: eLink,
					        		linkDark: eLinkDark }
					  	});

					  	alert('Foi adicionado um novo transfer!');

					}

    			}else{
    				$("#avisoSeccao").removeClass("hidden");
    			}


    	});

    });

    var changeGaleria = function(seccao){
    	$("#products").html(seccao + " <span class=\"caret\"></span>");
    }

</script>
<!-- JS Files -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--//\\ -->

</html>