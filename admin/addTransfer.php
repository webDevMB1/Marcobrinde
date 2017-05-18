<!DOCTYPE html>
<html>
<head>
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

<div id="teste"></div>

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

	<form id="form" name="form" enctype="multipart/form-data">
		<div id="parentDiv">
		    	<div id="avisoSeccao" class="alert alert-danger hidden">
		    		<strong>Erro!</strong> Por favor preencha todos os campos obrigatórios.
		    	</div>
		    	<div id="sucesso" class="alert alert-success hidden">
		    		<strong>Sucesso!</strong> Foi adicionado um novo transfer!
		    	</div>
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
			    	<input type="text" id="tReferencia" name="referencia" placeholder="Referência" disabled="disabled">
		    	</div>
		    	<div class="col-md-2">
		    		<h4>Dimensões</h4>
		    		<input type="text" id="tDimensoes" name="dimensoes" placeholder="Dimensoes" required>
		    	</div>
		    	<div class="col-md-2">
		    		<h4>Link</h4>
		    		<input type="text" id="tLink" name="link" placeholder="Link" disabled="disabled">
		    	</div>
		    	<div class="col-md-2">
	    			<h4>Link Versão Dark</h4>
		    		<input type="text" id="tLinkDark" name="link dark" placeholder="Link Dark" disabled="disabled">
	    		</div>
	    	</div>

	    	<hr>

	    	<!-- ================== Row Input Imagem ==================== -->
			    	<div class="row marBot">

			    		<h2 id="tituloUploadImgs">Upload das imagens</h2>
						<br>

						<!--<div id="alertWait" class="alert alert-warning hidden">
						  <strong>Aguarde!</strong> Estamos a processar o seu pedido...
						</div>-->

					    <div class="col-md-4">
					    	<center>
						    	<h4>Imagem do transfer</h4>
						    	<br>
						    	<img id="blah1t" src="#" alt="imagem" />
						    	<br>
							 	<input id="transfer" type='file' name="transfer" onchange="readURL('1', 't', this);"/ required>
							</center>
					    </div>
			    		<div class="col-md-4">
					    	<center>
						    	<h4>Imagem do transfer Versão Dark</h4>
						    	<br>
						    	<img id="blah1td" src="#" alt="imagem" />
						    	<br>
						    	<p>O nome do ficheiro tem de ser exactamente igual à versão normal do transfer mas com "dark-" no inicio.</p>
							 	<input id="transferDark" type='file' name="transferDark" onchange="readURL('1', 'td',this);"/>
							</center>
					    </div>
				    </div>

	    	<hr>

		</div>

		 <!-- ================== Row Button Update ==================== -->
	    <div class="row">
			<!--<a class="btn btn-lg" width="100%" style="border-radius: 0" id="submit">Enviar</a>-->
			<input id="addTransfer" class="updateButton" type="button" value="ADICIONAR">
	    </div>

    </form>

</div><!-- /container -->

<footer id="footerAddTransfer">
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
        <p>Foi adicionado um novo transfer com sucesso!</p>
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
        <h4 class="modal-title">Por favor aguarde.</h4>
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

    	$("#addTransfer").click(function(){

    			var seccaoEscolhida = $.trim($("#products").text());
    			var eNome = $("#tNome").val();
    			var eReferencia = $("#tReferencia").val();
    			var eDimensoes = $("#tDimensoes").val();
    			var eLink = $("#tLink").val();
    			var eLinkDark = $("#tLinkDark").val();

    			if(seccaoEscolhida != "Produtos" && eNome && eDimensoes){
    				$("#avisoSeccao").addClass("hidden");

								/* Modal Aguarde */
								$('#modalAguarde').modal({
										backdrop: 'static',
										keyboard: false
								});


						  	//php para enviar a primeira imagem
						    var file_data = $('#transfer').prop('files')[0];
						    var form_data = new FormData();
						    form_data.append('file', file_data);
						    form_data.append('seccao', seccaoEscolhida);
						    form_data.append('versao', "light");

								//php para enviar a segunda imagem
							 var file_data2 = $('#transferDark').prop('files')[0];
							 var form_data2 = new FormData();
							 form_data2.append('file', file_data2);
							 form_data2.append('seccao', seccaoEscolhida);
							 form_data2.append('versao', "dark");


							 $.when(
								 $.ajax({ //Actualizar a base de dados
										 type: 'POST',
										 url: 'PHPaddTransfer.php',
										 data: { seccao: seccaoEscolhida,
												 nome: eNome,
												 referencia: eReferencia,
												 dimensoes: eDimensoes,
												 link: eLink,
												 linkDark: eLinkDark }
								 }),
								 $.ajax({
										url: 'uploadImgs.php',
												type: 'post',
										dataType: 'text',
										cache: false,
												contentType: false,
												processData: false,
												data: form_data
										}),
									$.ajax({
							        url: 'uploadImgs.php',
							       	dataType: 'text',
							       	cache: false,
					                contentType: false,
					                processData: false,
					                data:  form_data2,
					                type: 'post'
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



    			}else{
    				$("#avisoSeccao").removeClass("hidden");
    			}

    	});

    });

    var changeGaleria = function(seccao){
    	$("#products").html(seccao + " <span class=\"caret\"></span>");

		var sSeccao = $.trim($("#products").text());

    	$.ajax({
    		type: 'POST',
	        url: 'PHPgetLastRef.php',
	        data: { seccao: sSeccao }
    	})
    		.done(function(data){
    			preencheReferencia(data);
    		});

    }

    var preencheReferencia = function(refAntiga){

    	var ref = refAntiga.split("#")[1];
    	ref++;
    	var novaRef = ("0000" + ref).slice(-4);
    	var stringSend = refAntiga.split("#")[0] + "#" + novaRef;
    	$("#tReferencia").val(stringSend);
    }


    /* ==============================================
		Função para mostrar as imagens seleccionadas
       ============================================== */

    var readURL = function (num, tipo, input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah'+ num + tipo +'')
                    .attr('src', e.target.result)
                    .width(300)
                    .css('display','block');
            };

            reader.readAsDataURL(input.files[0]);

            if(tipo == "t"){
            	var filenameT = $("#transfer").val().split("\\")[2];
	    		$("#tLink").val("light/" + filenameT);
	    	}else{
	    		var filenameTD = $("#transferDark").val().split("\\")[2];
	    		$("#tLinkDark").val("dark/" + filenameTD);
	    	}
        }

    }

</script>
<!-- JS Files -->
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!--//\\ -->

</html>
