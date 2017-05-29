<script type="text/javascript">

	$(document).ready(function(){
		$("#cart").css("width", "24.9%");
		$(".grow").css("position", "inherit");
		$(".grow").css("z-index", "90");
	});

	function changeGaleria(seccao){
		document.cookie = "seccao=" + seccao;
		window.location.replace("productos");
	}

</script>

<style type="text/css">
	.padding-right0{
		padding-right: 0;
	}

	.colorBlack{
		color: black;
	}

</style>

<!--header-->
<div class="header marginBottom4Content">
	<div class="header-top" style="margin-bottom: -5%">
		<div class="container"><!-- style="padding-bottom: 0.6%">-->
			<!--<div class="logo" style="width: 60%">-->
				<a href="loja"><img src="images/logo/logo.png" alt="logo" height="110" style="padding-bottom: 10px"></a>
				<a id="slogan" href="loja"><img src="images/logo/slogan.png" alt="slogan" height="55" style="float: right; margin-top: 2.5%; margin-right: 1%; max-width: 100%; max-height: 100%"></a>
			<!--</div>-->
		</div>
			<!-- grow -->
			<div class="grow">
				<div class="container">

				<!-- Static navbar -->
			      <nav class="navbar navbar-default" style="background-color: black; border: 0; margin-bottom: 0; margin-top: 0">
			        <div class="container-fluid" style="padding-right: 0; padding-left: 0;">
			          <div class="navbar-header">
			            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			              <span class="sr-only">Toggle navigation</span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			            </button>
			            <h2 id="tituloSeccao" style="margin-top: 10px"></h2> <!-- TITULO -->
			          </div>
			          <div id="navbar" class="navbar-collapse collapse" style="float: right">
			              <ul class="nav navbar-nav">
			                <li id="dropdownProdutos" class="dropdown" style="margin-right: 25px">
			                  <a href="#" id="products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">Produtos <span class="caret"></span></a>
			                  <ul class="dropdown-menu">

				                  <?php
				                  	require_once("lista.php");
				                  ?>

			                  </ul>
			                </li>
			                <li>
			                	<center>
				                	<div class="total" style="padding: 5px 1px;">
										<div id="rowCarrinho" class="row">
											<a href="checkout" class="padding-right0">
													<span id="valor" class="simpleCart_total" style="color: white"></span>
												<img id="cart" src="images/cart/cart.png" alt=""/>
											</a>
										</div>
										<div id="rowEsvaziar" class="row">
											<a id="esvaziar" href="javascript:;" class="simpleCart_empty padding-right0" style="color: white">Esvaziar</a>
										</div>
									</div>
								</center>
			                </li>
			              </ul>
			            </div>





			          <!--<div id="navbar" class="navbar-collapse collapse" style="padding-top: 5px">
			            <ul class="nav navbar-nav navbar-right">
			              <li id="liGal" style="margin-right: 10px; margin-top: -5px">
			              	<a id ="galeria" href="#" class="color1 dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background-color: black; color: white; font-size: 16px">Produtos <span class="caret"></span></a>
								<ul id="ulSeccao" class="dropdown-menu" style="float: right;">
									<li id="liDiversos"><a href="#" onclick="changeGaleria('diversos')">Diversos</a></li>
									<li id="liCacaPesca"><a href="#" onclick="changeGaleria('caca_pesca')">Caça / Pesca</a></li>
									<li id="liAnimais"><a href="#" onclick="changeGaleria('animais')">Animais</a></li>
									<li id="liAniversarios"><a href="#" onclick="changeGaleria('aniversarios')">Aniversário</a></li>
									<li id="liCrianças"><a href="#" onclick="changeGaleria('criancas')">Crianças</a></li>
									<li id="liDesporto"><a href="#" onclick="changeGaleria('desporto')">Desporto</a></li>
									<li id="liEtnicos"><a href="#" onclick="changeGaleria('etnicos')">Etnicos</a></li>
									<li id="liFamosos"><a href="#" onclick="changeGaleria('famosos')">Famosos</a></li>
									<li id="liFrasesDivertidos"><a href="#" onclick="changeGaleria('frases_divertidos')">Frases / Divertidos</a></li>
									<li id="lihipsterRetro"><a href="#" onclick="changeGaleria('hipster_retro')">Hipster / Retro</a></li>
									<li id="liMotores"><a href="#" onclick="changeGaleria('motores')">Motores</a></li>
									<li id="liMusica"><a href="#" onclick="changeGaleria('musica')">Música</a></li>
								</ul>
			              </li>
			               CARRINHO -->
			              <!--<li id="liCart">
			              	<div class="total">
								<div id="rowCarrinho" class="row">
									<a href="checkout.php" class="padding-right0">
											<span id="valor" class="simpleCart_total"></span>
										<img id="cart" src="images/cart/cart.png" alt=""/>
									</a>
								</div>
								<div id="rowEsvaziar" class="row">
									<a id="esvaziar" href="javascript:;" class="simpleCart_empty padding-right0">Esvaziar</a>
								</div>
							</div>
			              </li>
			              <li id="liSearch">
			              	<div id="sb-search" class="sb-search">
								<form action="#" method="post">
									<input id="search" class="sb-search-input black" placeholder="Pesquisar..." type="search">
									<input id="pesquisaInput" class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>

							 search-scripts
							<script src="js/classie.js"></script>
							<script src="js/uisearch.js"></script>
								<script>
									new UISearch( document.getElementById( 'sb-search' ) );
								</script>
							 search-scripts
			              </li>
			            </ul>
			          </div>--><!--/.nav-collapse -->


			        </div><!--/.container-fluid -->
			      </nav>

				</div>
			</div>
			<!-- /grow -->
	</div><!-- /header-top -->

	<div class="container menuFundo">
		<div class="head-top">

			<div class="clearfix"> </div>
		</div><!-- /head-top -->
	</div> <!-- /container MenuFundo -->
</div><!-- /header -->

	<!--
	 ___________________________________________________

	 FIM HEADER
	 ___________________________________________________-->


<script type="text/javascript">

	$(".total").on("mouseenter", function() {
       	$("#cart").attr("src","images/cart/cartGrey.png");
       	$("#valor").css("color","#ACACAC");
       	$("#esvaziar").css("color","#ACACAC");
	}).on('mouseleave', function(){
		  $("#cart").attr("src","images/cart/cart.png");
		  $("#valor").css("color","white");
	    $("#esvaziar").css("color","white");
	});

	/* Responsive */
	$(window).on('resize', function () {

		if($(window).width() < 768){
	    	$('#cart').css('width', '6%');
	    	$("#rowEsvaziar").css('padding-left', '12%');
	    	$("#sb-search").css('margin-left', '0');
	    	$("#sb-search").css('margin-top', '3%');
	    	$("#search").css('background-color', 'white');
	    	$(".inlineBlock").css('float', 'right');
	    	$(".inlineBlock").css('width', '50%');
	    }else if($(window).width() < 500){
	    	$(".inlineBlock").css('width', '100%');
	    	$(".inlineBlock").css('padding-right', '10%');
	    }
	});

	$(document).ready(function(){
		$("#products").on('click', function(){
			$(this).toggleClass("colorBlack");
		});
	});

	/* ------------------------------------------------------- PESQUISA
	$(window).load(function(){
		$("#search").on('keyup', function (e) {
		    if (e.keyCode == 13) {
		    	if($("#search").val() != ""){
		    		document.cookie = "pesquisa=true";
		    		document.cookie = "campoPesquisa=" + $("#search").val();
		    		window.location.replace("products.php");
		    	}
		    }
		});
	});*/

</script>

<script src="js/bootstrap.min.js"></script>
