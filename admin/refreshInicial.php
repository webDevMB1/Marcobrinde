<!DOCTYPE html>
<html>
<head>
	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<link rel="icon" href="../images/logo/icon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Marcobrinde website roupa brindes toldos reclamos design imagem grafica" />
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

	<title>ADMIN - Actualizar página inicial</title>
</head>
<body>


	<!-- ROW Logo -->
	<div id="rowLogo" class="row">
		<a href="index.html"><img id="logoImg" src="../images/index/10l.png" alt="logo" height="110" style="padding-bottom: 10px"></a>
	</div>

<div class="container">

	<div id="descricaoSeccao" class="row">
		<center>
			<h2>Actualizar Recentes</h2>
			<br>
			<p>Esta area actualiza a secção "Recentes" na página de entrada da Loja Online.</p>
			<p>As edições feitas aqui, alteram a tabela "recentes_transfers" na Base de Dados. Troca a informação existente na tabela com a informação inserida aqui.</p>
		</center>
	</div>

	<br>
	<div class="row">
		<center>
			<label id="labelRecentes" class="labelHover labelActive"><input class="hidden" type="radio" name="seccao" checked="checked" onclick="changeSeccao('recentes')">Recentes</label>
			<label id="labelDestaques" class="labelHover"><input class="hidden" type="radio" name="seccao" onclick="changeSeccao('destaques')">Destaques</label>
		</center>
		<span id="spanSeccao" class="hidden">recentes</span>

		<hr>
	</div>

	<div id="explicacao" class="row">
		<center><h4><strong>ATENÇÃO</strong></h4></center>
		<br>
		<p>Esta área altera os dados na base de dados. Sempre que adicionar um transfer para além de adicionar a respectiva informação na base de dados (os campos pedidos a baixo), deverá também adicionar as imagens através de FTP à respectiva pasta. Por outras palavras, ao adicionar um transfer sobre música, deve-se ir por FTP à pasta images/transfers/musica e adicionar as versões do transfer nas devidas pastas (light e dark) e adicionar a fotomontagem do transfer numa peça de roupa na pasta DR. (se esta pasta não existir deverá ser criada)</p>
		<hr>
	</div>



	<form name="form">
		<div id="parentDiv">
			<!-- ============================================== ROW PRIMEIRO TRANSFER ============================================= -->
			<div class="row">

				<h2 id="trans1">Primeiro Transfer</h2>
				<br>

				 <!-- ================== Row 1 Inputs ==================== -->
				 		<div class="row"> <!-- Row referencia -->
				 			<div id="erroPesquisa1" class="alert alert-danger hidden">
							  <strong>Erro!</strong> O transfer que procura não existe na Base de Dados.
							</div>
							<div id="erroInsere1" class="alert alert-danger hidden">
							  <strong>Erro!</strong> Por favor procure primeiro pelo transfer, usando a referência do mesmo, antes de inserir a sua fotomontagem.
							</div>
				 			<div class="col-md-12">
						    	<h4>Referência</h4>
						    	<input type="text" id="recentesReferencia1" name="referencia" placeholder="Referência" style="display: inline-block;">
						    	<button type="button" style="display: inline-block;" onclick="pesquisaInfoTransfer('1');"> Pesquisar Transfer </button>
					    	</div>
				 		</div>
				 		<br>
				 		<div class="row"> <!-- Row campos disabled -->
				 			<div class="col-md-2">
						    	<h4>Nome</h4>
						    	<input type="text" id="recentesNome1" name="nome" placeholder="Nome" disabled="disabled">
					    	</div>
					    	<div class="col-md-2">
						    	<h4>Tipo</h4>
						    	<input type="text" id="recentestipo1" name="tipo" placeholder="Tipo" disabled="disabled">
					    	</div>
					    	<div class="col-md-2">
					    		<h4>Dimensões</h4>
					    		<input type="text" id="recentesDimensoes1" name="dimensoes" placeholder="Dimensoes" disabled="disabled">
					    	</div>
					    	<div class="col-md-2">
					    		<h4>Link</h4>
					    		<input type="text" id="recenteslink1" name="link" placeholder="Link" disabled="disabled">
					    	</div>
					    	<div class="col-md-2">
				    			<h4>Link Versão Dark</h4>
					    		<input type="text" id="recentesLinkDark1" name="link dark" placeholder="Link Dark" disabled="disabled">
				    		</div>
				 			<div class="col-md-2">
					    		<h4>Link Imagem Roupa</h4>
					    		<input type="text" id="recentesLinkRoupa" name="link roupa" placeholder="Link Roupa" disabled="disabled">
					    	</div>
				 		</div>

				 		<br>

						<!-- ================== Row Input Imagem ==================== -->
						<div class="row marBot">

							<h4 id="tituloUploadImgs">Upload da imagem</h4>
							<div class="col-md-12">
								<br>
								<img id="blah1tDR" src="#" alt="imagem" />
								<br>
								<h4>Fotomontagem do transfer numa peça de roupa</h4>
								<br>
								<input id="transfer1DR" type='file' name="transfer1DR" onchange="checkReferenciaNotNull('1', this);"/>
							</div>
						</div>

						<hr>

			</div> <!-- /row -->

			<!-- ============================================== ROW SEGUNDO TRANSFER ============================================= -->

			<div class="row">

				<h2 id="trans2">Segundo Transfer</h2>
				<br>

				<div class="row"> <!-- Row referencia -->
		 			<div id="erroPesquisa2" class="alert alert-danger hidden">
					  <strong>Erro!</strong> O transfer que procura não existe na Base de Dados.
					</div>
					<div id="erroInsere2" class="alert alert-danger hidden">
						<strong>Erro!</strong> Por favor procure primeiro pelo transfer, usando a referência do mesmo, antes de inserir a sua fotomontagem.
					</div>
		 			<div class="col-md-12">
				    	<h4>Referência</h4>
				    	<input type="text" id="recentesReferencia2" name="referencia" placeholder="Referência" style="display: inline-block;">
				    	<button type="button" style="display: inline-block;" onclick="pesquisaInfoTransfer('2');"> Pesquisar Transfer </button>
			    	</div>
		 		</div>
		 		<br>

				 <!-- ================== Row 1 Inputs ==================== -->
				 	<div class="row marBot">
				 		<div class="col-md-2">
					    	<h4>Nome</h4>
					    	<input type="text" id="recentesNome2" name="nome" placeholder="Nome" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
					    	<h4>Tipo</h4>
					    	<input type="text" id="recentestipo2" name="tipo" placeholder="Tipo" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
				    		<h4>Dimensões</h4>
				    		<input type="text" id="recentesDimensoes2" name="dimensoes" placeholder="Dimensoes" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
				    		<h4>Link</h4>
				    		<input type="text" id="recenteslink2" name="link" placeholder="Link" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
			    			<h4>Link Versão Dark</h4>
				    		<input type="text" id="recentesLinkDark2" name="link dark" placeholder="Link Dark" disabled="disabled">
			    		</div>
				    	<div class="col-md-2">
				    		<h4>Link Imagem Roupa</h4>
				    		<input type="text" id="recentesLinkRoupa2" name="link roupa" placeholder="Link Roupa" disabled="disabled">
				    	</div>
			    	</div>

						<!-- ================== Row Input Imagem ==================== -->
						<div class="row marBot">

							<h4 id="tituloUploadImgs">Upload da imagem</h4>
							<div class="col-md-12">
								<br>
								<img id="blah2tDR" src="#" alt="imagem" />
								<br>
								<h4>Fotomontagem do transfer numa peça de roupa</h4>
								<br>
								<input id="transfer2DR" type='file' name="transfer2DR" onchange="checkReferenciaNotNull('2', this);"/>
							</div>
						</div>

						<hr>

			</div> <!-- /row -->

			<!-- ============================================== ROW TERCEIRO TRANSFER ============================================= -->

			<div class="row">

				<h2 id="trans3">Terceiro Transfer</h2>
				<br>

				<div class="row"> <!-- Row referencia -->
		 			<div id="erroPesquisa3" class="alert alert-danger hidden">
					  <strong>Erro!</strong> O transfer que procura não existe na Base de Dados.
					</div>
					<div id="erroInsere3" class="alert alert-danger hidden">
						<strong>Erro!</strong> Por favor procure primeiro pelo transfer, usando a referência do mesmo, antes de inserir a sua fotomontagem.
					</div>
		 			<div class="col-md-12">
				    	<h4>Referência</h4>
				    	<input type="text" id="recentesReferencia3" name="referencia" placeholder="Referência" style="display: inline-block;">
				    	<button type="button" style="display: inline-block;" onclick="pesquisaInfoTransfer('3');"> Pesquisar Transfer </button>
			    	</div>
		 		</div>
		 		<br>

				 <!-- ================== Row 1 Inputs ==================== -->
				 	<div class="row marBot">
				 		<div class="col-md-2">
					    	<h4>Nome</h4>
					    	<input type="text" id="recentesNome3" name="nome" placeholder="Nome" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
					    	<h4>Tipo</h4>
					    	<input type="text" id="recentestipo3" name="tipo" placeholder="Tipo" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
				    		<h4>Dimensões</h4>
				    		<input type="text" id="recentesDimensoes3" name="dimensoes" placeholder="Dimensoes" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
				    		<h4>Link</h4>
				    		<input type="text" id="recenteslink3" name="link" placeholder="Link" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
			    			<h4>Link Versão Dark</h4>
				    		<input type="text" id="recentesLinkDark3" name="link dark" placeholder="Link Dark" disabled="disabled">
			    		</div>
				    	<div class="col-md-2">
				    		<h4>Link Imagem Roupa</h4>
				    		<input type="text" id="recentesLinkRoupa3" name="link roupa" placeholder="Link Roupa" disabled="disabled">
				    	</div>
			    	</div>

						<!-- ================== Row Input Imagem ==================== -->
						<div class="row marBot">

							<h4 id="tituloUploadImgs">Upload da imagem</h4>
							<div class="col-md-12">
								<br>
								<img id="blah3tDR" src="#" alt="imagem" />
								<br>
								<h4>Fotomontagem do transfer numa peça de roupa</h4>
								<br>
								<input id="transfer3DR" type='file' name="transfer3DR" onchange="checkReferenciaNotNull('3', this);"/>
							</div>

						</div>
						<hr>

			</div> <!-- /row -->

			<!-- ============================================== ROW QUARTO TRANSFER ============================================= -->

			<div class="row">

				<h2 id="trans4">Quarto Transfer</h2>
				<br>

				<div class="row"> <!-- Row referencia -->
		 			<div id="erroPesquisa4" class="alert alert-danger hidden">
					  <strong>Erro!</strong> O transfer que procura não existe na Base de Dados.
					</div>
					<div id="erroInsere4" class="alert alert-danger hidden">
						<strong>Erro!</strong> Por favor procure primeiro pelo transfer, usando a referência do mesmo, antes de inserir a sua fotomontagem.
					</div>
		 			<div class="col-md-12">
				    	<h4>Referência</h4>
				    	<input type="text" id="recentesReferencia4" name="referencia" placeholder="Referência" style="display: inline-block;">
				    	<button type="button" style="display: inline-block;" onclick="pesquisaInfoTransfer('4');"> Pesquisar Transfer </button>
			    	</div>
		 		</div>
		 		<br>


				 <!-- ================== Row 1 Inputs ==================== -->
				 	<div class="row marBot">
				 		<div class="col-md-2">
					    	<h4>Nome</h4>
					    	<input type="text" id="recentesNome4" name="nome" placeholder="Nome" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
					    	<h4>Tipo</h4>
					    	<input type="text" id="recentestipo4" name="tipo" placeholder="Tipo" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
				    		<h4>Dimensões</h4>
				    		<input type="text" id="recentesDimensoes4" name="dimensoes" placeholder="Dimensoes" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
				    		<h4>Link</h4>
				    		<input type="text" id="recenteslink4" name="link" placeholder="Link" disabled="disabled">
				    	</div>
				    	<div class="col-md-2">
			    			<h4>Link Versão Dark</h4>
				    		<input type="text" id="recentesLinkDark4" name="link dark" placeholder="Link Dark" disabled="disabled">
			    		</div>
				    	<div class="col-md-2">
				    		<h4>Link Imagem Roupa</h4>
				    		<input type="text" id="recentesLinkRoupa4" name="link roupa" placeholder="Link Roupa" disabled="disabled">
				    	</div>
			    	</div>

						<!-- ================== Row Input Imagem ==================== -->
						<div class="row marBot">

							<h4 id="tituloUploadImgs">Upload da imagem</h4>
							<div class="col-md-12">
								<br>
								<img id="blah4tDR" src="#" alt="imagem" />
								<br>
								<h4>Fotomontagem do transfer numa peça de roupa</h4>
								<br>
								<input id="transfer4DR" type='file' name="transfer4DR" onchange="checkReferenciaNotNull('4', this);"/>
							</div>
						</div>
						<hr>

			</div> <!-- /row -->

		</div><!-- /Div parent -->

		 <!-- ================== Row Button Update ==================== -->
	    <div class="row">
			<input id="updateButton" class="updateButton" type="button" value="UPDATE">
	    </div>

    </form>

</div><!-- /container -->

<footer>
	<div class="linhaFooter"></div>
    <p id="copyright">© 2017 MarcoBrinde</p>
</footer>

<!-- Modal para alertar o utilizador de que o upload foi efectuado com sucesso -->

<div id="modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close hide" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sucesso!</h4>
      </div>
      <div class="modal-body">
        <p>Todas as actualizações foram efectuadas com sucesso!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default hide" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<div id="modalAguarde" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close hide" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Por favor aguarde...</h4>
      </div>
      <div class="modal-body">
        <p>Estamos a processar o seu pedido, por favor aguarde...</p>
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

    	$("#updateButton").click(function(){

					/* Modal Aguarde */
				 $('#modalAguarde').modal({
						 backdrop: 'static',
						 keyboard: false
				 });


					var mSeccao = $("#spanSeccao").text();

					/* var 1 */
					var mNome1 = $("#recentesNome1").val();
					var mReferencia1 = $('#recentesReferencia1').val();
					var mTipo1 = $("#recentestipo1").val().toLowerCase();
					var mDimensoes1 = $("#recentesDimensoes1").val();
					var mLink1 = $("#recenteslink1").val();
					var mLinkDark1 = $("#recentesLinkDark1").val();
					var mLinkRoupa1 = $("#recentesLinkRoupa").val();

					/* var 2 */
					var mNome2 = $("#recentesNome2").val();
					var mReferencia2 = $('#recentesReferencia2').val();
					var mTipo2 = $("#recentestipo2").val().toLowerCase();
					var mDimensoes2 = $("#recentesDimensoes2").val();
					var mLink2 = $("#recenteslink2").val();
					var mLinkDark2 = $("#recentesLinkDark2").val();
					var mLinkRoupa2 = $("#recentesLinkRoupa2").val();

					/* var 3 */
					var mNome3 = $("#recentesNome3").val();
					var mReferencia3 = $('#recentesReferencia3').val();
					var mTipo3 = $("#recentestipo3").val().toLowerCase();
					var mDimensoes3 = $("#recentesDimensoes3").val();
					var mLink3 = $("#recenteslink3").val();
					var mLinkDark3 = $("#recentesLinkDark3").val();
					var mLinkRoupa3 = $("#recentesLinkRoupa3").val();

					/* var 4 */
					var mNome4 = $("#recentesNome4").val();
					var mReferencia4 = $('#recentesReferencia4').val();
					var mTipo4 = $("#recentestipo4").val().toLowerCase();
					var mDimensoes4 = $("#recentesDimensoes4").val();
					var mLink4 = $("#recenteslink4").val();
					var mLinkDark4 = $("#recentesLinkDark4").val();
					var mLinkRoupa4 = $("#recentesLinkRoupa4").val();


						/* Upload das imagens para o servidor */

						//---------------------Imagem numero 1
					 var file_data = $('#transfer1DR').prop('files')[0];
					 var seccao = $("#recentestipo1").val().toLowerCase();
					 var form_data = new FormData();
					 form_data.append('file', file_data);
					 form_data.append('seccao', seccao);
					 form_data.append('versao', "DR");

						 //---------------------Imagem numero 2
						var file_data2 = $('#transfer2DR').prop('files')[0];
						var seccao = $("#recentestipo2").val().toLowerCase();
						var form_data2 = new FormData();
						form_data2.append('file', file_data2);
						form_data2.append('seccao', seccao);
						form_data2.append('versao', "DR");

						//-------------------------------Imagem numero 3
					  var file_data3 = $('#transfer3DR').prop('files')[0];
					  var seccao = $("#recentestipo3").val().toLowerCase();
					  var form_data3 = new FormData();
					  form_data3.append('file', file_data3);
					  form_data3.append('seccao', seccao);
					  form_data3.append('versao', "DR");

						 //-------------------------------Imagem numero 4
						var file_data4 = $('#transfer4DR').prop('files')[0];
						var seccao = $("#recentestipo4").val().toLowerCase();
						var form_data4 = new FormData();
						form_data4.append('file', file_data4);
						form_data4.append('seccao', seccao);
						form_data4.append('versao', "DR");


					$.when(
						$.ajax({ //Actualização da Base de Dados
					        type: 'POST',
					        url: 'PHPsqlRecentes.php',
					        data: { seccao: mSeccao,
					        		nome1: mNome1,
					        		referencia1: mReferencia1,
					        		tipo1: mTipo1,
					        		dimensoes1: mDimensoes1,
					        		link1: mLink1,
					        		linkDark1: mLinkDark1,
					        		linkRoupa1: mLinkRoupa1,
					        		nome2: mNome2,
					        		referencia2: mReferencia2,
					        		tipo2: mTipo2,
					        		dimensoes2: mDimensoes2,
					        		link2: mLink2,
					        		linkDark2: mLinkDark2,
					        		linkRoupa2: mLinkRoupa2,
					        		nome3: mNome3,
					        		referencia3: mReferencia3,
					        		tipo3: mTipo3,
					        		dimensoes3: mDimensoes3,
					        		link3: mLink3,
					        		linkDark3: mLinkDark3,
					        		linkRoupa3: mLinkRoupa3,
					        		nome4: mNome4,
					        		referencia4: mReferencia4,
					        		tipo4: mTipo4,
					        		dimensoes4: mDimensoes4,
					        		link4: mLink4,
					        		linkDark4: mLinkDark4,
					        		linkRoupa4: mLinkRoupa4},
									success: function(){
										console.log("Feitas alterações na Base de Dados.");
									},
									error: function(){
										$("#modalAguarde").modal('hide');
										alert("Erro ao efectuar alterações na Base de Dados.");
									}
					    }),
								$.ajax({ //Upload da primeira imagem
									 url: 'uploadImgs.php',
									 dataType: 'text',
									 cache: false,
											 contentType: false,
											 processData: false,
											 data: form_data,
											 type: 'post',
								 success: function(){
									 console.log("Upload da primeira imagem com sucesso");
								 },
								 error: function(){
									 $("#modalAguarde").modal('hide');
									 alert("Erro no upload da imagem");
								 }
							 }),
								 $.ajax({ //Upload da segunda imagem
										 url: 'uploadImgs.php',
										 dataType: 'text',
										 cache: false,
												 contentType: false,
												 processData: false,
												 data: form_data2,
												 type: 'post',
									 success: function(){
										 console.log("Upload da segunda imagem com sucesso");
									 },
									 error: function(){
										 $("#modalAguarde").modal('hide');
										 alert("Erro no upload da imagem");
									 }
								 }),
								 $.ajax({ //Upload da terceira imagem
										 url: 'uploadImgs.php',
										 dataType: 'text',
										 cache: false,
												 contentType: false,
												 processData: false,
												 data: form_data3,
												 type: 'post',
									 success: function(){
										 console.log("Upload da terceira imagem com sucesso");
									 },
									 error: function(){
										 $("#modalAguarde").modal('hide');
										 alert("Erro no upload da imagem");
									 }
								 }),
								 $.ajax({//Upload da quarta imagem
			 							url: 'uploadImgs.php',
			 							dataType: 'text',
			 							cache: false,
			 									contentType: false,
			 									processData: false,
			 									data: form_data4,
			 									type: 'post',
			 						success: function(){
			 							console.log("Upload da quarta imagem com sucesso");
			 						},
			 						error: function(){
										$("#modalAguarde").modal('hide');
			 							alert("Erro no upload da imagem");
			 						}
			 					})
				    ).then( function(){
							$("#modalAguarde").modal('hide');
								// Remover val dos campos preenchidos
							 $("#tNome").val('');
							 $("#tReferencia").val('');
							 $("#tDimensoes").val('');
							 $("#tLink").val('');
							 $("#tLinkDark").val('');

							/* Modal de sucesso */
							 $('#modal').modal({
									 backdrop: 'static',
									 keyboard: false
							 });

							 setTimeout(function() {
									 $("#modal").modal('hide');
							 }, 3000);
				    });


    	}); // click

    }); //load

    /* ==================================================================================================
				Função para detectar se já se procurou por um transfer antes de inserir a imagem
       ================================================================================================== */

       var checkReferenciaNotNull = function(numTransfer, file){
       		switch(numTransfer) {
					    case '1':
					    	verificaInserirImagem(numTransfer, file);
					        break;
					    case '2':
					        verificaInserirImagem(numTransfer, file);
					        break;
					    case '3':
					        verificaInserirImagem(numTransfer, file);
					        break;
					    case '4':
					        verificaInserirImagem(numTransfer, file);
					        break;
					    default:
					        return;
					}
       }


       var verificaInserirImagem = function(num, file){
       	    if($("#recentesReferencia" + num).val() != ''){
			    		$("#erroInsere" + num).addClass("hidden");
			    		readURLTR(num, file);
			    	}else{
			    		$("#erroInsere" + num).removeClass("hidden");
			    		$("#transfer"+ num +"DR").val('');
			    	}
       }

    /* ==============================================
		Função para mostrar as imagens seleccionadas
       ============================================== */

    var readURLTR = function (num, input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah'+ num + 'tDR' +'')
                    .attr('src', e.target.result)
                    .width(300)
                    .css('display','block');
            };

            reader.readAsDataURL(input.files[0]);


            if(num == '1'){
            	var tipo = $("#recentestipo1").val();
            	var filenameTDR = $("#transfer1DR").val().split("\\")[2];
			    		$("#recentesLinkRoupa").val(tipo.toLowerCase() + "/DR/" + filenameTDR);
			    	}else if(num == '2'){
			    		var tipo = $("#recentestipo2").val();
			    		var filenameTDR = $("#transfer2DR").val().split("\\")[2];
			    		$("#recentesLinkRoupa2").val(tipo.toLowerCase() + "/DR/" + filenameTDR);
			    	}else if(num == '3'){
			    		var tipo = $("#recentestipo3").val();
						var filenameTDR = $("#transfer3DR").val().split("\\")[2];
			    		$("#recentesLinkRoupa3").val(tipo.toLowerCase() + "/DR/" + filenameTDR);
			    	}else if(num == '4'){
			    		var tipo = $("#recentestipo4").val();
			    		var filenameTDR = $("#transfer4DR").val().split("\\")[2];
			    		$("#recentesLinkRoupa4").val(tipo.toLowerCase() + "/DR/" + filenameTDR);
			    	}

        }

    }


    /* ===============================================================
			Função para alterar a descrição da secção seleccionada
       =============================================================== */

    var changeSeccao = function(seccao){
    	if(seccao === 'recentes'){
    		if($("#trans1").text() != "Primeiro Transfer"){
	    		$("#descricaoSeccao").html("<center>\
												<h2>Actualizar Recentes</h2>\
												<br>\
												<p>Esta area actualiza a secção \"Recentes\" na página de entrada da Loja Online.</p>\
												<p>As edições feitas aqui, alteram a tabela \"recentes_transfers\" na Base de Dados. Troca a informação existente na tabela com a informação inserida aqui.</p>\
											</center>");
	    		$("#spanSeccao").text("recentes");
	    		ordenarDivs();
    			$("#trans1").text("Primeiro Transfer");
	    		$("#trans2").text("Segundo Transfer");
	    		$("#trans3").text("Terceiro Transfer");
	    		$("#trans4").text("Quarto Transfer");

	    		$("#labelRecentes").toggleClass('labelActive');
	    		$("#labelDestaques").toggleClass('labelActive');
    		}
    	}else if(seccao === 'destaques'){
    		if($("#trans1").text() != "Quarto Transfer"){
	    		$("#descricaoSeccao").html("<center>\
												<h2>Actualizar Destaques</h2>\
												<br>\
												<p>Esta area actualiza a secção \"Destaques\" na página de entrada da Loja Online.</p>\
												<p>As edições feitas aqui, alteram a tabela \"destaque_transfers\" na Base de Dados. Troca a informação existente na tabela com a informação inserida aqui.</p>\
											</center>");
	    		$("#spanSeccao").text("destaque");
	    		ordenarDivs();
    			$("#trans1").text("Quarto Transfer");
	    		$("#trans2").text("Terceiro Transfer");
	    		$("#trans3").text("Segundo Transfer");
	    		$("#trans4").text("Primeiro Transfer");

	    		$("#labelRecentes").toggleClass('labelActive');
	    		$("#labelDestaques").toggleClass('labelActive');
    		}
    	}

    }

    var ordenarDivs = function(){
    	$('#parentDiv > div').each(function() {
		    $(this).prependTo(this.parentNode);
		});
    }

    /* ================================================
    		Funções para preencher a info do transfer
       ================================================ */

       var pesquisaInfoTransfer = function(numTransfer){

   			var sReferencia = $("#recentesReferencia" + numTransfer).val();
   			var sSeccao = $("#recentesReferencia" + numTransfer).val().split("-")[1];


       		$.ajax({
	    		type: 'POST',
		        url: 'PHPgetInfoTransfer.php',
		        data: { referencia: sReferencia,
		        		seccao: sSeccao }
	    	})
	    		.done(function(data){

	    			if(data == ""){
	    				$("#erroPesquisa" + numTransfer).removeClass("hidden");
	    			}else{
	    				$("#erroPesquisa" + numTransfer).addClass("hidden");

		    			var dataSplit = data.toString().split(",");

		    			$("#recentestipo"+ numTransfer).val(sSeccao);
		    			$("#recentesNome"+ numTransfer).val(dataSplit[0]);
		    			$("#recentesDimensoes"+ numTransfer).val(dataSplit[1]);
		    			$("#recenteslink"+ numTransfer).val(dataSplit[2]);
		    			$("#recentesLinkDark"+ numTransfer).val(dataSplit[3]);
	    			}

	    		});

       }

</script>

<!-- JS Files -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--//\\ -->

</html>
