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

	<title>ADMIN - Actualiza Recentes</title>
</head>
<body>

<div class="container">

	<!-- ROW Logo -->
	<div id="rowLogo" class="row">
		<a href="index.html"><img id="logoImg" src="../images/index/10l.png" alt="logo" height="110" style="padding-bottom: 10px"></a>
	</div>

	<div class="row">

		<center>
			<h2>Actualizar Recentes</h2>
			<br>
			<p>Esta area actualiza a secção "Recentes" na página de entrada da Loja Online.</p>
			<p>As edições feitas aqui, alteram a tabela "recentes_transfers" na Base de Dados. Troca a informação existente na tabela com a informação inserida aqui.</p>
			<hr>
		</center>
	</div>


	<form name="form"> 
		<!-- ============================================== ROW PRIMEIRO TRANSFER ============================================= -->
		<div class="row">

			<h2>Primeiro Transfer</h2>
			<br>

			 <!-- ================== Row 1 Inputs ==================== -->
			 	<div class="row marBot">
			 		<div class="col-md-2">
				    	<h4>Nome</h4>
				    	<input type="text" id="recentesNome1" name="nome" placeholder="Nome">
			    	</div>
			    	<div class="col-md-2">
				    	<h4>Referência</h4>
				    	<input type="text" id="recentesReferencia1" name="referencia" placeholder="Referência">
			    	</div>
			    	<div class="col-md-2">
				    	<h4>Tipo</h4>
				    	<input type="text" id="recentestipo1" name="tipo" placeholder="Tipo">
			    	</div>
			    	<div class="col-md-2">
			    		<h4>Dimensões</h4>
			    		<input type="text" id="recentesDimensoes1" name="dimensoes" placeholder="Dimensoes">
			    	</div>
			    	<div class="col-md-2">
			    		<h4>Link</h4>
			    		<input type="text" id="recenteslink1" name="link" placeholder="Link">	
			    	</div>
			    	<div class="col-md-2">
		    			<h4>Link Versão Dark</h4>
			    		<input type="text" id="recentesLinkDark1" name="link dark" placeholder="Link Dark">	
		    		</div>
		    	</div>
		    	<!-- ================== Row 2 Inputs ==================== -->
		    	<div class="row marBot">
			    	<div class="col-md-2">
			    		<h4>Link Imagem Roupa</h4>
			    		<input type="text" id="recentesLinkRoupa" name="link roupa" placeholder="Link Roupa">	
			    	</div>
			    </div>

			    <!-- ================== Row Input Imagem ==================== -->
		    	<!--<div class="row marBot">
				    <div class="col-md-4">
				    	<center>
					    	<h4>Imagem do transfer</h4>
					    	<img id="blah1t" src="#" alt="imagem" />
						 	<input id="recentesImg1t" type='file' onchange="readURL('1', 't', this);"/>
						</center>
				    </div>
		    		<div class="col-md-4">
				    	<center>
					    	<h4>Imagem do transfer Versão Dark</h4>
					    	<p>O nome do ficheiro tem de ser exactamente igual à versão normal do transfer mas com "dark-" no inicio.</p>
					    	<img id="blah1td" src="#" alt="imagem" />
						 	<input id="recentesImg1td" type='file' onchange="readURL('1', 'td',this);"/>
						</center>
				    </div>
		    		<div class="col-md-4">
		    			<center>
					    	<h4>Imagem com a roupa</h4>
					    	<img id="blah1r" src="#" alt="imagem" />
						 	<input id="recentesImg1r" type='file' onchange="readURL('1', 'r', this);"/>
					 	</center>
				    </div>
			    </div>-->

			    <hr>

		</div> <!-- /row -->

		<!-- ============================================== ROW SEGUNDO TRANSFER ============================================= -->

		<div class="row">

			<h2>Segundo Transfer</h2>
			<br>
			 <!-- ================== Row 1 Inputs ==================== -->
			 	<div class="row marBot">
			 		<div class="col-md-2">
				    	<h4>Nome</h4>
				    	<input type="text" id="recentesNome2" name="nome" placeholder="Nome">
			    	</div>
			    	<div class="col-md-2">
				    	<h4>Referência</h4>
				    	<input type="text" id="recentesReferencia2" name="referencia" placeholder="Referência">
			    	</div>
			    	<div class="col-md-2">
				    	<h4>Tipo</h4>
				    	<input type="text" id="recentestipo2" name="tipo" placeholder="Tipo">
			    	</div>
			    	<div class="col-md-2">
			    		<h4>Dimensões</h4>
			    		<input type="text" id="recentesDimensoes2" name="dimensoes" placeholder="Dimensoes">
			    	</div>
			    	<div class="col-md-2">
			    		<h4>Link</h4>
			    		<input type="text" id="recenteslink2" name="link" placeholder="Link">	
			    	</div>
			    	<div class="col-md-2">
		    			<h4>Link Versão Dark</h4>
			    		<input type="text" id="recentesLinkDark2" name="link dark" placeholder="Link Dark">	
		    		</div>
		    	</div>
		    	<!-- ================== Row 2 Inputs ==================== -->
		    	<div class="row marBot">
			    	<div class="col-md-2">
			    		<h4>Link Imagem Roupa</h4>
			    		<input type="text" id="recentesLinkRoupa2" name="link roupa" placeholder="Link Roupa">	
			    	</div>
			    </div>

			    <!-- ================== Row Input Imagem ==================== -->
		    	<!--<div class="row marBot">
		    		<div class="col-md-4">
		    			<center>
					    	<h4>Imagem do Transfer</h4>
					    	<img id="blah2t" src="#" alt="imagem" />
						 	<input id="recentesImg2t" type='file' onchange="readURL('2', 't', this);"/>
						</center>
				    </div>
				    <div class="col-md-4">
				    	<center>
					    	<h4>Imagem do transfer Versão Dark</h4>
					    	<p>O nome do ficheiro tem de ser exactamente igual à versão normal do transfer mas com "dark-" no inicio.</p>
					    	<img id="blah2td" src="#" alt="imagem" />
						 	<input id="recentesImg2td" type='file' onchange="readURL('2', 'td', this);"/>
						</center>
				    </div>
				    <div class="col-md-4">
				    	<center>
					    	<h4>Imagem com a Roupa</h4>
					    	<img id="blah2r" src="#" alt="imagem" />
						 	<input id="recentesImg2r" type='file' onchange="readURL('2', 'r', this);"/>
						</center>
				    </div>
			    </div>-->

			    <hr>

		</div> <!-- /row -->

		<!-- ============================================== ROW TERCEIRO TRANSFER ============================================= -->

		<div class="row">

			<h2>Terceiro Transfer</h2>
			<br>

			 <!-- ================== Row 1 Inputs ==================== -->
			 	<div class="row marBot">
			 		<div class="col-md-2">
				    	<h4>Nome</h4>
				    	<input type="text" id="recentesNome3" name="nome" placeholder="Nome">
			    	</div>
			    	<div class="col-md-2">
				    	<h4>Referência</h4>
				    	<input type="text" id="recentesReferencia3" name="referencia" placeholder="Referência">
			    	</div>
			    	<div class="col-md-2">
				    	<h4>Tipo</h4>
				    	<input type="text" id="recentestipo3" name="tipo" placeholder="Tipo">
			    	</div>
			    	<div class="col-md-2">
			    		<h4>Dimensões</h4>
			    		<input type="text" id="recentesDimensoes3" name="dimensoes" placeholder="Dimensoes">
			    	</div>
			    	<div class="col-md-2">
			    		<h4>Link</h4>
			    		<input type="text" id="recenteslink3" name="link" placeholder="Link">	
			    	</div>
			    	<div class="col-md-2">
		    			<h4>Link Versão Dark</h4>
			    		<input type="text" id="recentesLinkDark3" name="link dark" placeholder="Link Dark">	
		    		</div>
		    	</div>
		    	<!-- ================== Row 2 Inputs ==================== -->
		    	<div class="row marBot">
			    	<div class="col-md-2">
			    		<h4>Link Imagem Roupa</h4>
			    		<input type="text" id="recentesLinkRoupa3" name="link roupa" placeholder="Link Roupa">	
			    	</div>
			    </div>

			    <!-- ================== Row Input Imagem ==================== -->
		    	<!--<div class="row marBot">
		    		<div class="col-md-4">
		    			<center>
					    	<h4>Imagem do transfer</h4>
					    	<img id="blah3t" src="#" alt="imagem" />
						 	<input id="recentesImg3t" type='file' onchange="readURL('3', 't', this);"/>
						</center>
				    </div>
		    		<div class="col-md-4">
		    			<center>
					    	<h4>Imagem do transfer Versão Dark</h4>
					    	<p>O nome do ficheiro tem de ser exactamente igual à versão normal do transfer mas com "dark-" no inicio.</p>
					    	<img id="blah3td" src="#" alt="imagem" />
						 	<input id="recentesImg3td" type='file' onchange="readURL('3', 'td', this);"/>
						</center>
				    </div>
		    		<div class="col-md-4">
		    			<center>
					    	<h4>Imagem com a roupa</h4>
					    	<img id="blah3r" src="#" alt="imagem" />
						 	<input id="recentesImg3r" type='file' onchange="readURL('3', 'r', this);"/>
						</center>
				    </div>
			    </div>-->

			    <hr>

		</div> <!-- /row -->

		<!-- ============================================== ROW QUARTO TRANSFER ============================================= -->

		<div class="row">

			<h2>Quarto Transfer</h2>
			<br>

			 <!-- ================== Row 1 Inputs ==================== -->
			 	<div class="row marBot">
			 		<div class="col-md-2">
				    	<h4>Nome</h4>
				    	<input type="text" id="recentesNome4" name="nome" placeholder="Nome">
			    	</div>
			    	<div class="col-md-2">
				    	<h4>Referência</h4>
				    	<input type="text" id="recentesReferencia4" name="referencia" placeholder="Referência">
			    	</div>
			    	<div class="col-md-2">
				    	<h4>Tipo</h4>
				    	<input type="text" id="recentestipo4" name="tipo" placeholder="Tipo">
			    	</div>
			    	<div class="col-md-2">
			    		<h4>Dimensões</h4>
			    		<input type="text" id="recentesDimensoes4" name="dimensoes" placeholder="Dimensoes">
			    	</div>
			    	<div class="col-md-2">
			    		<h4>Link</h4>
			    		<input type="text" id="recenteslink4" name="link" placeholder="Link">	
			    	</div>
			    	<div class="col-md-2">
		    			<h4>Link Versão Dark</h4>
			    		<input type="text" id="recentesLinkDark4" name="link dark" placeholder="Link Dark">	
		    		</div>
		    	</div>
		    	<!-- ================== Row 2 Inputs ==================== -->
		    	<div class="row marBot">
			    	<div class="col-md-2">
			    		<h4>Link Imagem Roupa</h4>
			    		<input type="text" id="recentesLinkRoupa4" name="link roupa" placeholder="Link Roupa">	
			    	</div>
			    </div>

			    <!-- ================== Row Input Imagem ==================== -->
		    	<!--<div class="row marBot">
		    		<div class="col-md-4">
		    			<center>
					    	<h4>Imagem do transfer</h4>
					    	<img id="blah4t" src="#" alt="imagem" />
						 	<input id="recentesImg4t" type='file' onchange="readURL('4', 't', this);"/>
						</center>
				    </div>
		    		<div class="col-md-4">
		    			<center>
					    	<h4>Imagem do transfer Versão Dark</h4>
					    	<p>O nome do ficheiro tem de ser exactamente igual à versão normal do transfer mas com "dark-" no inicio.</p>
					    	<img id="blah4td" src="#" alt="imagem" />
						 	<input id="recentesImg4td" type='file' onchange="readURL('4', 'td', this);"/>
						</center>
				    </div>
		    		<div class="col-md-4">
		    			<center>
					    	<h4>Imagem com a roupa</h4>
					    	<img id="blah4r" src="#" alt="imagem" />
						 	<input id="recentesImg4r" type='file' onchange="readURL('4', 'r', this);"/>
						</center>
				    </div>
			    </div>-->

			    <hr>
		</div> <!-- /row -->

		 <!-- ================== Row Button Update ==================== -->
	    <div class="row">
			<!--<a class="btn btn-lg" width="100%" style="border-radius: 0" id="submit">Enviar</a>-->
			<input id="updateButton" type="submit" value="UPDATE">
	    </div>

    </form>

</div><!-- /container -->
	
<footer>
	<div class="linhaFooter"></div>
    <p id="copyright">© 2017 MarcoBrinde</p>
</footer>



</body>

<script type="text/javascript">

    $(window).load(function(){

    	$("#updateButton").click(function(){

    			/* var 1 */
    			var mNome1 = $("#recentesNome1").val();
				var mReferencia1 = $('#recentesReferencia1').val();
				var mTipo1 = $("#recentestipo1").val();
				var mDimensoes1 = $("#recentesDimensoes1").val();
				var mLink1 = $("#recenteslink1").val();
				var mLinkDark1 = $("#recentesLinkDark1").val();
				var mLinkRoupa1 = $("#recentesLinkRoupa1").val();

				/* var 2 */
				var mNome2 = $("#recentesNome2").val();
				var mReferencia2 = $('#recentesReferencia2').val();
				var mTipo2 = $("#recentestipo2").val();
				var mDimensoes2 = $("#recentesDimensoes2").val();
				var mLink2 = $("#recenteslink2").val();
				var mLinkDark2 = $("#recentesLinkDark2").val();
				var mLinkRoupa2 = $("#recentesLinkRoupa2").val();

				/* var 3 */
				var mNome3 = $("#recentesNome3").val();
				var mReferencia3 = $('#recentesReferencia3').val();
				var mTipo3 = $("#recentestipo3").val();
				var mDimensoes3 = $("#recentesDimensoes3").val();
				var mLink3 = $("#recenteslink3").val();
				var mLinkDark3 = $("#recentesLinkDark3").val();
				var mLinkRoupa3 = $("#recentesLinkRoupa3").val();

				/* var 4 */
				var mNome4 = $("#recentesNome4").val();
				var mReferencia4 = $('#recentesReferencia4').val();
				var mTipo4 = $("#recentestipo4").val();
				var mDimensoes4 = $("#recentesDimensoes4").val();
				var mLink4 = $("#recenteslink4").val();
				var mLinkDark4 = $("#recentesLinkDark4").val();
				var mLinkRoupa4 = $("#recentesLinkRoupa4").val();



				$.ajax({
			        type: 'POST',
			        url: 'sqlRecentes.php',
			        data: { nome1: mNome1,
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
			        		linkRoupa4: mLinkRoupa4}
			    });

			    
			    /* Upload das imagens para o servidor 


			    var file_data = $('#recentesImg1t').prop('files')[0];
			    var form_data = new FormData();
			    form_data.append('file', file_data);
			    alert(form_data);


			    $.ajax({
			        url: 'uploadImgs.php',
			       	dataType: 'text',
			       	cache: false,
	                contentType: false,
	                processData: false,
	                data: form_data,
	                type: 'post',
					success: function(){
					 	alert("Upload da imagem com sucesso");
					},
					error: function(){
					 	alert("Erro no upload da imagem");
					}
			    });*/


			   
			   alert('Informação alterada com sucesso!');

    	});

    });

    /* ============================================== 
		Função para mostrar as imagens seleccionadas
       ============================================== 

    function readURL(num, tipo, input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah'+ num + tipo +'')
                    .attr('src', e.target.result)
                    .width(300)
                    .css('display','block');
            };

            reader.readAsDataURL(input.files[0]);

            //$('#span'+ num + tipo'').text(tipo);
        }
    }*/

</script>

<!-- JS Files -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<!--//\\ -->

</html>