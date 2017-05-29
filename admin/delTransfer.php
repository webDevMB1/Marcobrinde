<script type="text/javascript">
		//Iniciação de variaveis globais
		var sSeccao = "";
</script>

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

	<title>ADMIN - Apagar Transfer</title>
</head>
<body>


	<!-- ROW Logo -->
	<div id="rowLogo" class="row">
		<a href="http://www.marcobrinde.com/admin"><img id="logoImg" src="../images/index/10l.png" alt="logo" height="110" style="padding-bottom: 10px"></a>
	</div>

<div class="container">

	<div id="descricaoSeccao" class="row">
		<center>
			<h2>Eliminar Transfer</h2>
			<br>
			<p>Esta area elimina um transfer.</p>
			<p>As edições feitas aqui, apagam a entrada do transfer da Base de Dados e elimina as imagens das pastas do servidor.</p>
		</center>
	</div>

	<hr>

	<div id="explicacao" class="row">
		<center><h4><strong>ATENÇÃO</strong></h4></center>
		<br>
		<p>Esta área efectua alterações tanto a nível de website como a nível de Base de Dados e pastas dos transfers. Ao eliminar um transfer está a eliminar a entrada do transfer na Base de Dados e está a eliminar as imagens das pastas do servidor. </p>
	</div>

	<hr>

	<form name="form">
		<div id="parentDiv">
			<!-- ============================================== ROW PRIMEIRO TRANSFER ============================================= -->
			<div class="row">

				<h2 id="trans1">Transfer a eliminar</h2>
				<br>

				<!-- ================== Row 1 Inputs ==================== -->
			 	<div class="row marBot">
					<div id="erroNaoExiste" class="alert alert-danger hidden">
						<strong>Erro!</strong> O transfer que procura não existe na Base de Dados.
					</div>
					<div id="erroCampoNull" class="alert alert-danger hidden">
						<strong>Erro!</strong> Por favor preencha o campo obrigatório.
					</div>
			 		<div class="col-md-12">
				    	<h4>Referência</h4>
				    	<input type="text" id="refTransfer" name="ref" placeholder="Referência">
							<button type="button" style="display: inline-block;" onclick="pesquisaInfoTransfer('refTransfer');"> Pesquisar Transfer </button>
			    	</div>
		    	</div>

					<!-- ================== Row 1 Inputs ==================== -->
 				 	<div class="row marBot">
 				 		<div class="col-md-2">
 					    	<h4>Nome</h4>
 					    	<input type="text" id="nomerefTransfer" name="nome" placeholder="Nome" disabled="disabled">
 				    	</div>
 				    	<div class="col-md-2">
 					    	<h4>Tipo</h4>
 					    	<input type="text" id="tiporefTransfer" name="tipo" placeholder="Tipo" disabled="disabled">
 				    	</div>
 				    	<div class="col-md-2">
 				    		<h4>Dimensões</h4>
 				    		<input type="text" id="dimensoesrefTransfer" name="dimensoes" placeholder="Dimensoes" disabled="disabled">
 				    	</div>
 				    	<div class="col-md-2">
 				    		<h4>Link</h4>
 				    		<input type="text" id="linkrefTransfer" name="link" placeholder="Link" disabled="disabled">
 				    	</div>
 				    	<div class="col-md-2">
 			    			<h4>Link Versão Dark</h4>
 				    		<input type="text" id="linkDarkrefTransfer" name="link dark" placeholder="Link Dark" disabled="disabled">
 			    		</div>
 			    	</div>

			    <hr>

			</div> <!-- /row -->

		</div>

		 <!-- ================== Row Button Update ==================== -->
	    <div class="row">
			<input id="delTransfer" class="updateButton" type="button" value="Eliminar">
	    </div>

    </form>

</div><!-- /container -->

<footer id="footerSeccao">
	<div class="linhaFooter"></div>
    <p id="copyright">© 2017 MarcoBrinde</p>
</footer>

<!-- Modal para alertar o utilizador de que a secção foi eliminada com sucesso -->

<div id="modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close hide" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sucesso!</h4>
      </div>
      <div class="modal-body">
        <p>Transfer eliminado com sucesso!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default hide" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


</body>

<script type="text/javascript">


    $(window).load(function(){

    	$("#delTransfer").click(function(){

				if($("#refTransfer").val() != ''){
					$("#erroCampoNull").addClass('hidden');
					if(confirm("Está prestes a eliminar um transfer. Ao confirmar não há como voltar atrás. Deseja avançar?")) {
						var mReferencia = $.trim($("#refTransfer").val());
						var mSeccao = $.trim($("#refTransfer").val()).split("-")[1].toLowerCase();
						var mLink = $("#linkrefTransfer").val();
						var mLinkDark = $("#linkDarkrefTransfer").val();

						$.when(
							$.ajax({
										type: 'POST',
										url: 'PHPdelTransfer.php',
										data: { referencia: mReferencia,
										 				seccao: mSeccao,
													 	link: mLink,
														linkDark: mLinkDark }
								})
							).then( function(){
									 // Modal de sucesso
									 $('#modal').modal({
											 backdrop: 'static',
											 keyboard: false
									 });

									 setTimeout(function() {
										 	$("#modal").modal('hide');
											 location.reload();
									 }, 3000);
							});
					} // if confirm
				}else{
					$("#erroCampoNull").removeClass('hidden');
				} //check val != ''

    	}); // click event
    }); // load


		 /* ================================================
     				Funções para preencher a info do transfer
        ================================================ */

        var pesquisaInfoTransfer = function(refTransfer){

  			var sReferencia = $("#" + refTransfer).val();
  			var sSeccao = $("#" + refTransfer).val().split("-")[1];

    		$.ajax({
 	    		type: 'POST',
 		        url: 'PHPgetInfoTransfer.php',
 		        data: { referencia: sReferencia,
 		        		seccao: sSeccao }
 	    	})
 	    		.done(function(data){

 	    			if(data == ""){
 	    				$("#erroNaoExiste").removeClass("hidden");
 	    			}else{
 	    				$("#erroNaoExiste").addClass("hidden");

 		    			var dataSplit = data.toString().split(",");

 		    			$("#tipo"+ refTransfer).val(sSeccao);
 		    			$("#nome"+ refTransfer).val(dataSplit[0]);
 		    			$("#dimensoes"+ refTransfer).val(dataSplit[1]);
 		    			$("#link"+ refTransfer).val(dataSplit[2]);
 		    			$("#linkDark"+ refTransfer).val(dataSplit[3]);
 	    			}

 	    		});

        }

</script>
<!-- JS Files -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--//\\ -->

</html>
