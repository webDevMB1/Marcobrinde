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

	<title>ADMIN - Apagar Secção</title>
</head>
<body>


	<!-- ROW Logo -->
	<div id="rowLogo" class="row">
		<a href="http://www.marcobrinde.com/admin"><img id="logoImg" src="../images/index/10l.png" alt="logo" height="110" style="padding-bottom: 10px"></a>
	</div>

<div class="container">

	<div id="descricaoSeccao" class="row">
		<center>
			<h2>Eliminar Secção</h2>
			<br>
			<p>Esta area elimina uma secção de transfers.</p>
			<p>As edições feitas aqui, apagam a respectiva tabela na Base de Dados e elimina as pastas do servidor.</p>
		</center>
	</div>

	<hr>

	<div id="explicacao" class="row">
		<center><h4><strong>ATENÇÃO</strong></h4></center>
		<br>
		<p>Esta área efectua alterações tanto a nível de website como a nível de Base de Dados e pastas dos transfers. Ao eliminar uma secção está a eliminar uma entrada à listagem "Produtos" no menu da Loja, a eliminar uma tabela completa da BD e está ainda a eliminar as pastas relacionadas com essa secção do servidor. </p>
	</div>

	<hr>

	<form name="form">
		<div id="parentDiv">
			<!-- ============================================== ROW PRIMEIRO TRANSFER ============================================= -->
			<div class="row">

				<h2 id="trans1">Secção a eliminar</h2>
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

			    <hr>

			</div> <!-- /row -->

		</div>

		 <!-- ================== Row Button Update ==================== -->
	    <div class="row">
			<!--<a class="btn btn-lg" width="100%" style="border-radius: 0" id="submit">Enviar</a>-->
			<input id="delSection" class="updateButton" type="submit" value="Eliminar">
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
        <p>A secção foi eliminada com sucesso!</p>
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

    	$("#delSection").click(function(){

				if(confirm("Está prestes a eliminar uma secção. Ao confirmar não há como voltar atrás. Deseja avançar?")) {
					var mNomeSeccao = $.trim($("#products").text());
					var mLiSave = $("#li_" + mNomeSeccao + "")[0].outerHTML;

					$.when(
						$.ajax({
									type: 'POST',
									url: 'PHPdelSection.php',
									data: { nome: mNomeSeccao,
													li: mLiSave }
							})
						).then( function(){
								 /* Modal de sucesso */
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

    	}); // click event
    }); // load


		/* ===================================================
				Função para alterar o nome da seccao seleccionada
		   =================================================== */

			 var changeGaleria = function(seccao){
		     	$("#products").html(seccao + " <span class=\"caret\"></span>");
		 			sSeccao = $.trim($("#products").text());
	     }

</script>
<!-- JS Files -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--//\\ -->

</html>
