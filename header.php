<!-- font awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

<script type="text/javascript">

	$(document).ready(function(){
		$("#cart").css("width", "24.9%");
		$(".grow").css("position", "inherit");
		$(".grow").css("z-index", "90");


		$("#products").on('click', function(){
			$(this).toggleClass("colorBlack");
		});


		/* ------------------------------------------------------- PESQUISA */

		$("#buttonPesquisa").on('click', function(e){
			if($("#search").val() != ""){
	    		document.cookie = "pesquisa=true";
	    		document.cookie = "campoPesquisa=" + $("#search").val();
	    		window.location.replace("productos");
	    	}
		});

		$("#search").on('keyup', function (e) {
		    if (e.keyCode == 13) {
		    	if($("#search").val() != ""){
		    		document.cookie = "pesquisa=true";
		    		document.cookie = "campoPesquisa=" + $("#search").val();
		    		window.location.replace("productos");
		    	}
		    }   
		});

		// -------------------------------------------------------  //Pesquisa

	});

	// =============================================================

	function changeGaleria(seccao){
		document.cookie = "seccao=" + seccao;
		document.cookie = "pesquisa=false";
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
			          </div>
			          <div id="navbar" class="navbar-collapse collapse" style="float: right">
			              <ul class="nav navbar-nav">

			              <!-- ===== Pesquisa ===== -->

							<div class="col-md-6"> <!-- Espaçamento lado esquerdo para fazer "float" right -->
								<h2 id="tituloSeccao" style="margin-top: 10px"></h2> <!-- TITULO -->
							</div> 
					        <div id="divPesquisa" class="col-md-4">
					            <div id="custom-search-input">
					                <div class="input-group">
					                    <input id="search" type="text" class="form-control" placeholder="Pesquisar..." />
					                    <span class="input-group-btn">
					                        <button id="buttonPesquisa" class="btn btn-info btn-lg" type="button">
					                            <i class="fa fa-search" aria-hidden="true"></i>
					                        </button>
					                    </span>
					                </div>
					            </div>
							</div>

							<!-- ===== Pesquisa ===== -->

			                <li id="dropdownProdutos" class="dropdown" style="margin-right: 25px">
			                  <a href="#" id="products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white; text-align: center">Produtos <span class="caret"></span></a>
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

</script>

<script src="js/bootstrap.min.js"></script>
