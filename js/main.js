jQuery(document).ready(function($){

	simpleCart({
		currency: 	"EUR",
		cartColumns: [
			{ view: function(item, column){
			      return"<img src='"+item.get('thumb')+"'>";
			   },
			  attr: 'thumb' },
			{ attr: "name" , label: "Nome" },
			{ attr: "color" , label: "Cor" },
			{ attr: "ref" , label: "Ref." },
			{ attr: "size" , label: "Tam." },
			{ attr: "price" , label: "Preço", view: 'currency' },
			{ view: "decrement" , label: false },
			{ attr: "quantity" , label: "Quant." },
			{ view: "increment" , label: false },
			{ attr: "total" , label: "SubTotal", view: 'currency' },
			{ view: "remove" , text: "Remover" , label: false }
		],
		cartStyle: "table"
	});

	var tabItems = $('.cd-tabs-navigation a'),
		tabContentWrapper = $('.cd-tabs-content');

	var tipoDetalhado = $('#selectTipo option').filter(':selected').attr("value");
	var tipoCamisola = "T-Shirt Unisexo";
	var qualidade = "100% Algodão, 190g";
	var corCamisola = "";
	var tamanhoCamisola = "";
	var preco = "";

	mudaTituloArtigo(tipoCamisola);

	tabItems.on('click', function(event){
		event.preventDefault();
		var selectedItem = $(this);
		if( !selectedItem.hasClass('selected') ) {
			var selectedTab = selectedItem.data('content'),
				selectedContent = tabContentWrapper.find('li[data-content="'+selectedTab+'"]'),
				slectedContentHeight = selectedContent.innerHeight();

			tabItems.removeClass('selected');
			selectedItem.addClass('selected');
			selectedContent.addClass('selected').siblings('li').removeClass('selected');
			//animate tabContentWrapper height when content changes
			tabContentWrapper.animate({
				'height': slectedContentHeight
			}, 200);
		}
	});

	//hide the .cd-tabs::after element when tabbed navigation has scrolled to the end (mobile version)
	checkScrolling($('.cd-tabs nav'));
	$(window).on('resize', function(){
		checkScrolling($('.cd-tabs nav'));
		tabContentWrapper.css('height', 'auto');
	});
	$('.cd-tabs nav').on('scroll', function(){
		checkScrolling($(this));
	});

	function checkScrolling(tabs){
		var totalTabWidth = parseInt(tabs.children('.cd-tabs-navigation').width()),
		 	tabsViewport = parseInt(tabs.width());
		if( tabs.scrollLeft() >= totalTabWidth - tabsViewport) {
			tabs.parent('.cd-tabs').addClass('is-ended');
		} else {
			tabs.parent('.cd-tabs').removeClass('is-ended');
		}
	}

	/* Responsive */

	if($(window).width() < 992){
    	$('#menuLateral').removeClass('height630');
	}else if($(window).width() > 992){
    	$('#menuLateral').addClass('height630', $(window).width() > 992);
	}

	/* ===============================
			Remover :hover em mobile
	   =============================== */

	var touch = 'ontouchstart' in document.documentElement
	            || (navigator.MaxTouchPoints > 0)
	            || (navigator.msMaxTouchPoints > 0);

	if (touch) { // remove all :hover stylesheets
	    try { // prevent exception on browsers not supporting DOM styleSheets properly
	        for (var si in document.styleSheets) {
	            var styleSheet = document.styleSheets[si];
	            if (!styleSheet.rules) continue;

	            for (var ri = styleSheet.rules.length - 1; ri >= 0; ri--) {
	                if (!styleSheet.rules[ri].selectorText) continue;

	                if (styleSheet.rules[ri].selectorText.match(':hover')) {
	                    styleSheet.deleteRule(ri);
	                }
	            }
	        }
	    } catch (ex) {}
	}

}); /* /ready */


var estiloCheckout = function(){
	$(".item-thumb").addClass("col-md-2");
	$(".item-thumb").children('img').css("width", "100%");
    $(".item-name").addClass("col-md-1");
    $(".item-color").addClass("col-md-1");
    $(".item-size").addClass("col-md-1");
    $(".item-price").addClass("col-md-1");
	$(".item-decrement").addClass("col-md-1");
	$(".item-quantity").addClass("col-md-1");
	$(".item-increment").addClass("col-md-1");
	$(".item-total").addClass("col-md-1");
	$(".item-remove").addClass("col-md-1");
}

var changeTituloSeccao = function(titulo){
	$("#tituloSeccao").text(""+titulo+"");
}



/*===========================================================================================================
									ZONA SINGLE ; Selecção das camisolas
  ========================================================================================================= */

  var changeThumb = function(){
  	var transferSelected = $(".flex-active-slide").attr("data-thumb");
  	$(".item_thumb").text(transferSelected);
  }

/*=========================================
	Alterar Cor da Camisola Seleccionada

	Tem em consideração o tipo da cami-
	sola e actualiza a imagem com o
	tipo e cor seleccionados.
  =========================================*/
var changeCor = function(){

		var selectedCor = $('#selectCor option').filter(':selected').attr("value");
		var selColor = $('#selectCor option').filter(':selected').text();
		$(".item_color").text(selColor);

		if(selectedCor === "tshirtUniPreto"){     		/* === Tshirt UNI ===================== */
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtUni/tshirtBlack.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtUniVermelho"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtUni/tshirtRed.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtUniAzulRoyal"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtUni/tshirtRoyalBlue.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtUniAzulMar"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtUni/tshirtFrenchNavy.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtUniAreia"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtUni/tshirtSand.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtUniLaranja"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtUni/tshirtOrange.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtUniVerdeTropa"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtUni/tshirtNavy.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtUniBranco"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtUni/tshirtWhite.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtUniCinza"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtUni/tshirtDarkGrey.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtUniVerde"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtUni/tshirtGreen.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtAppleGreen"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtUni/tshirtAppleGreen.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtMulherPreto"){ 	/* === Tshirt Mulher =================== */
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtMulher/tshirtMulherPreto.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtMulherBranco"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtMulher/tshirtMulherBranco.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtMulherOrquidea"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtMulher/tshirtMulherOrq.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtMulherRosa"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtMulher/tshirtMulherRosa.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtMulherAmarelo"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtMulher/tshirtMulherYellow.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtMulherVerde"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtMulher/tshirtMulherVerde.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtMulherAzul"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtMulher/tshirtMulherAzul.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtCriancaAmarelo"){ 	/* === Tshirt Criança =================== */
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtCriança/tshirtCriancaYellow.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtCriancaVerde"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtCriança/tshirtCriancaVerde.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtCriancaVermelho"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtCriança/tshirtCriancaRed.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtCriancaAzul"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtCriança/tshirtCriancaAzul.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtCriancaRosa"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtCriança/tshirtCriancaRosa.jpg) no-repeat center center;');
		}else if(selectedCor === "tshirtCriancaLaranja"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/tshirtCriança/tshirtCriancaLaranja.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzUniPreto"){ 	/* === Sweat Capuz Unisexo =================== */
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatCapuzUni/sweatCapuzPreto.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzUniVerde"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatCapuzUni/sweatCapuzMaca.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzUniCamel"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatCapuzUni/sweatCapuzCamel.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzUniAzulCiano"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatCapuzUni/sweatCapuzCyan.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzUniCinza"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatCapuzUni/sweatCapuzCinza.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzUniAzulMar"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatCapuzUni/sweatCapuzAzul.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuz2Preto"){ 	/* === Sweat Capuz Unisexo (2 Cores) =================== */
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatCapuzUni2/sweatUniPreto.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuz2Cinza"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatCapuzUni2/sweatUniCinza.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuz2AzulMar"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatCapuzUni2/sweatUniMar.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuz2AzulRoyal"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatCapuzUni2/sweatUniRoyal.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzMulherRosa"){ 	/* === Sweat Capuz Senhora =================== */
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatWoman/sweatWRosa.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzMulherRosetón"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatWoman/sweatWRoseton.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzMulherAzul"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatWoman/sweatWMar.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzMulherChocolate"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatWoman/sweatWChoco.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzCriancaGris"){ 	/* === Sweat Capuz Criança =================== */
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatChild/sweatChildCinza.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzCriancaVermelho"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatChild/sweatChildRed.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatCapuzCriancaAzul"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatChild/sweatChildAzul.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesUniVermelho"){ 	/* === Sweat Simples Unisexo =================== */
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleUni/sweatSimpleRed.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesUniCaqui"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleUni/sweatSimpleCaqui.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesUniAzulPorto"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleUni/sweatSimpleAzulPorto.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesUniMagenta"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleUni/sweatSimpleMag.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesUniCinza"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleUni/sweatSimpleCinza.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesUniAntracite"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleUni/sweatSimpleAntra.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesUniAzulMarengo"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleUni/sweatSimpleAzulMarengo.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesUniCamel"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleUni/sweatSimpleCamel.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesCriancaAzul"){ 	/* === Sweat Simples Criança =================== */
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleCrianca/sweatSimpleCriancaCyan.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesCriancaVerde"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleCrianca/sweatSimpleCriancaMaca.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesCriancaVermelho"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleCrianca/sweatSimpleCriancaRed.jpg) no-repeat center center;');
		}else if(selectedCor === "sweatSimplesCriancaMagenta"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/sweatSimpleCrianca/sweatSimpleCriancaMag.jpg) no-repeat center center;');
		}/*else if(selectedCor === "colUniCaqui"){ 	/* === Colete Unisexo ===================
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/colUni/colUniCaqui.jpg) no-repeat center center;');
		}else if(selectedCor === "colUniCinza"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/colUni/colUniCinza.jpg) no-repeat center center;');
		}else if(selectedCor === "colUniAmarelo"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/colUni/colUniYellow.jpg) no-repeat center center;');
		}else if(selectedCor === "colUniAzul"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/colUni/colUniCyan.jpg) no-repeat center center;');
		}else if(selectedCor === "colUniMagenta"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/colUni/colUniMag.jpg) no-repeat center center;');
		}*/else if(selectedCor === "casacoPreto"){ 	/* === Casaco =================== */
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/casaco/casacoPreto.jpg) no-repeat center center;');
		}else if(selectedCor === "casacoCinza"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/casaco/casacoCinza.jpg) no-repeat center center;');
		}else if(selectedCor === "casacoBranco"){
			$('#divFlexslider').removeAttr('style').attr('style', 'background: url(images/roupa/casaco/casacoBranco.jpg) no-repeat center center;');
		}

		corCamisola = $("#selectCor option").filter(':selected').text();
	}

	var mudaTituloArtigo = function(titulo){
		$("#tituloArtigo").text(titulo);
	}

	var changeTamanho = function(){
		var selectedSize = $('#selectSize option').filter(':selected').attr("value");
		$(".item_size").text(selectedSize);
	}


	/*=========================================
		Alterar Tipo da Camisola Seleccionada

		Actualiza listagem de cores consoante
		o tipo seleccionado
	  =========================================*/
	var changeTipo = function(){

		tipoDetalhado = $('#selectTipo option').filter(':selected').attr("value");

		if(tipoDetalhado === "T-Shirt Unisexo"){
			tipoCamisola = "T-shirt";
			qualidade = "100% Algodão, 190g";
			$("#selectCor").html("<option value = \"tshirtUniVerde\">Verde</option>\
								  <option value = \"tshirtUniPreto\">Preto</option>\
								  <option value = \"tshirtUniVermelho\">Vermelho</option>\
								  <option value = \"tshirtUniAzulRoyal\">Azul Royal</option>\
								  <option value = \"tshirtUniAzulMar\">Azul Marinho</option>\
								  <option value = \"tshirtUniAreia\">Areia</option>\
								  <option value = \"tshirtUniLaranja\">Laranja</option>\
								  <option value = \"tshirtUniVerdeTropa\">Verde Tropa</option>\
								  <option value = \"tshirtUniBranco\">Branco</option>\
								  <option value = \"tshirtUniCinza\">Cinza Escura</option>");

			$("#selectSize").html("<option value = \"XXL\">XXL</option>\
								   <option value = \"XL\">XL</option>\
								   <option value = \"L\">L</option>\
								   <option value = \"M\">M</option>\
								   <option value = \"S\">S</option>");


		}else if(tipoDetalhado === "T-Shirt Senhora"){
			tipoCamisola = "T-shirt";
			qualidade = "100% Algodão, 190g";
			$("#selectCor").html("<option value = \"tshirtMulherVerde\">Verde</option>\
								  <option value = \"tshirtMulherPreto\">Preto</option>\
								  <option value = \"tshirtMulherBranco\">Branco</option>\
								  <option value = \"tshirtMulherOrquidea\">Orquidea</option>\
								  <option value = \"tshirtMulherRosa\">Rosa</option>\
								  <option value = \"tshirtMulherAmarelo\">Amarelo</option>\
								  <option value = \"tshirtMulherAzul\">Azul</option>");

			$("#selectSize").html("<option value = \"XL\">XL</option>\
								   <option value = \"L\">L</option>\
								   <option value = \"M\">M</option>\
								   <option value = \"S\">S</option>");

		}else if(tipoDetalhado === "T-Shirt Criança"){
			tipoCamisola = "T-shirt";
			qualidade = "100% Algodão, 190g";
			$("#selectCor").html("<option value = \"tshirtCriancaVerde\">Verde</option>\
								  <option value = \"tshirtCriancaAmarelo\">Amarelo</option>\
								  <option value = \"tshirtCriancaVermelho\">Vermelho</option>\
								  <option value = \"tshirtCriancaAzul\">Azul</option>\
								  <option value = \"tshirtCriancaRosa\">Rosa</option>\
								  <option value = \"tshirtCriancaLaranja\">Laranja</option>");

			$("#selectSize").html("<option value = \"12 anos\">12 anos</option>\
								   <option value = \"10 anos\">10 anos</option>\
								   <option value = \"8 anos\">8 anos</option>\
								   <option value = \"6 anos\">6 anos</option>\
								   <option value = \"4 anos\">4 anos</option>\
								   <option value = \"2 anos\">2 anos</option>");

		}else if(tipoDetalhado === "Sweat Capuz Unisexo"){
			tipoCamisola = "Sweat Capuz";
			$("#selectCor").html("<option value = \"sweatCapuzUniVerde\">Verde</option>\
								  <option value = \"sweatCapuzUniPreto\">Preto</option>\
								  <option value = \"sweatCapuzUniCamel\">Camel</option>\
								  <option value = \"sweatCapuzUniAzulCiano\">Azul Ciano</option>\
								  <option value = \"sweatCapuzUniCinza\">Cinza</option>\
								  <option value = \"sweatCapuzUniAzulMar\">Azul Marinho</option>");

			$("#selectSize").html("<option value = \"XL\">XL</option>\
								   <option value = \"L\">L</option>\
								   <option value = \"M\">M</option>\
								   <option value = \"S\">S</option>");

		}else if(tipoDetalhado === "Sweat Capuz Unisexo (2 Cores)"){
			tipoCamisola = "Sweat Capuz";
			qualidade = "65% Poliéster, 35% Algodão, 280g";
			$("#selectCor").html("<option value = \"sweatCapuz2Preto\">Preto</option>\
								  <option value = \"sweatCapuz2Cinza\">Cinza</option>\
								  <option value = \"sweatCapuz2AzulMar\">Azul Marinho</option>\
								  <option value = \"sweatCapuz2AzulRoyal\">Azul Royal</option>");

			$("#selectSize").html("<option value = \"XL\">XL</option>\
								   <option value = \"L\">L</option>\
								   <option value = \"M\">M</option>\
								   <option value = \"S\">S</option>");

		}else if(tipoDetalhado === "Sweat Capuz Senhora"){
			tipoCamisola = "Sweat Capuz";
			qualidade = "65% Poliéster, 35% Algodão, 280g";
			$("#selectCor").html("<option value = \"sweatCapuzMulherRosa\">Rosa</option>\
								  <option value = \"sweatCapuzMulherRosetón\">Rosetón</option>\
								  <option value = \"sweatCapuzMulherAzul\">Azul Marinho</option>\
								  <option value = \"sweatCapuzMulherChocolate\">Chocolate</option>");

			$("#selectSize").html("<option value = \"XL\">XL</option>\
								   <option value = \"L\">L</option>\
								   <option value = \"M\">M</option>\
								   <option value = \"S\">S</option>");

		}else if(tipoDetalhado === "Sweat Capuz Criança"){
			tipoCamisola = "Sweat Capuz";
			qualidade = "65% Poliéster, 35% Algodão, 280g";
			$("#selectCor").html("<option value = \"sweatCapuzCriancaGris\">Gris Vigoré</option>\
								  <option value = \"sweatCapuzCriancaVermelho\">Vermelho</option>\
								  <option value = \"sweatCapuzCriancaAzul\">Azul Royal</option>");

			$("#selectSize").html("<option value = \"11/12 anos\">11/12 anos</option>\
								   <option value = \"9/10 anos\">9/10 anos</option>\
								   <option value = \"7/8 anos\">7/8 anos</option>\
								   <option value = \"5/6 anos\">5/6 anos</option>");

		}else if(tipoDetalhado === "Sweat Simples Unisexo"){
			tipoCamisola = "Sweat Simples";
			$("#selectCor").html("<option value = \"sweatSimplesUniVermelho\">Vermelho</option>\
								  <option value = \"sweatSimplesUniCaqui\">Caqui</option>\
								  <option value = \"sweatSimplesUniAzulPorto\">Azul Porto</option>\
								  <option value = \"sweatSimplesUniMagenta\">Magenta</option>\
								  <option value = \"sweatSimplesUniCinza\">Cinza Marengo</option>\
								  <option value = \"sweatSimplesUniAntracite\">Antracite</option>\
								  <option value = \"sweatSimplesUniAzulMarengo\">Azul Marengo</option>\
								  <option value = \"sweatSimplesUniCamel\">Camel</option>");

			$("#selectSize").html("<option value = \"XL\">XL</option>\
								   <option value = \"L\">L</option>\
								   <option value = \"M\">M</option>\
								   <option value = \"S\">S</option>");


		}else if(tipoDetalhado === "Sweat Simples Criança"){
			tipoCamisola = "Sweat Simples";
			$("#selectCor").html("<option value = \"sweatSimplesCriancaAzul\">Azul Ciano</option>\
								  <option value = \"sweatSimplesCriancaVerde\">Verde</option>\
								  <option value = \"sweatSimplesCriancaVermelho\">Vermelho</option>\
								  <option value = \"sweatSimplesCriancaMagenta\">Magenta</option>");

			$("#selectSize").html("<option value = \"10/12 anos\">10/12 anos</option>\
								   <option value = \"6/8 anos\">6/8 anos</option>\
								   <option value = \"4/5 anos\">4/5 anos</option>");

		}/*else if(tipoDetalhado === "Colete Unisexo"){
			tipoCamisola = "Colete";
			$("#selectCor").html("<option value = \"colUniCaqui\">Caqui</option>\
								  <option value = \"colUniCinza\">Cinza</option>\
								  <option value = \"colUniAmarelo\">Amarelo Florescente</option>\
								  <option value = \"colUniAzul\">Azul Ciano</option>\
								  <option value = \"colUniMagenta\">Magenta</option>");

			$("#selectSize").html("<option value = \"XL\">XL</option>\
								   <option value = \"L\">L</option>\
								   <option value = \"M\">M</option>\
								   <option value = \"S\">S</option>");

		}*/else if(tipoDetalhado === "Casaco"){
			tipoCamisola = "Casaco";
			$("#selectCor").html("<option value = \"casacoPreto\">Preto</option>\
								  <option value = \"casacoCinza\">Cinza</option>\
								  <option value = \"casacoBranco\">Branco</option>");

			$("#selectSize").html("<option value = \"XXL\">XXL</option>\
								   <option value = \"XL\">XL</option>\
								   <option value = \"L\">L</option>\
								   <option value = \"M\">M</option>\
								   <option value = \"S\">S</option>\
								   <option value = \"XS\">XS</option>");

		}

		mudaTituloArtigo(tipoDetalhado);
		$("#qualidadeRoupa").text(qualidade);

		ajustaPreço();
	}

	  /*=======================================
	      			Detalhes da camisola
	    =======================================*/

	    var getTipoDetalhado = function(){
			return tipoDetalhado;
		}

		var getTipoCamisola = function(){
			return tipoCamisola;
		}

		var getCorCamisola = function(){
			return corCamisola;
		}

		var getTamanhoCamisola = function(){
			return $("#selectSize option").filter(":selected").text();
		}


		/*============================================================
	      			Ajustar o Preço consoante o tipo da camisola

	      			Tabela de Preços é definida aqui!

	      			T-shirts (Homem, Mulher, Criança) - 11.95€
	      			Sweats c/ Capuz - 24.95€
	      			Sweats Simples (Adulto, Criança) - 19.95€
	      			Casaco c/ Capuz - 24.95€
	      ============================================================= */

	    var ajustaPreço= function(){
	    	var tipo = getTipoCamisola();

	    	if(tipo === "T-shirt"){
	    		preco = "11.95";
	    		$("#preçoArtigo").text("11.95€");
	    	}else if(tipo === "Sweat Capuz"){
	    		preco = "24.95";
	    		$("#preçoArtigo").text("24.95€");
	    	}else if(tipo === "Sweat Simples"){
	    		preco = "19.95";
	    		$("#preçoArtigo").text("19.95€");
	    	}/*else if(tipo === "Colete"){
	    		preco = "19.95";
	    		$("#preçoArtigo").text("19.95€");
	    	}*/else if(tipo === "Casaco"){
	    		preco = "24.95";
	    		$("#preçoArtigo").text("24.95€");
	    	}
	    }


	    /*============================================================
	      						CARRINHO - Finalizar compra
	      ============================================================= */

	      /* =========================================================
	      		Função para detectar se há algum artigo no carrinho
	      		e adicionar o button "Finalizar Compra" / button "hipay"
	         ========================================================= */


	    var checkZeroArtigos = function(){
	    	if($("#valor").text() === "€0.00"){
			    $("#finalCompra").addClass("hidden");
			    $("#rowPagamentos").addClass("hidden");
			    $("#submit").addClass("hidden");
			    document.cookie ="valorPortes=0.00";
			    document.cookie ="valorCompra=0.00";
			    $("#portes").text("€0.00");
			    $("#valTotal").text("€0.00");
			}else{
				$("#finalCompra").removeClass("hidden");
				$("#rowPagamentos").removeClass("hidden");
				$("#submit").removeClass("hidden");
	        }
	    }

	    /*  =========================================================
	      		Função para verificar peso total da encomenda e
	      		ajustar os portes consoante esse valor

	      		T-shirt Unisexo = 230g
	      		T-shirt Mulher = 205g
	      		T-shirt Criança = 130g
	      		Sweat Unisexo Capuz = 630g
	      		Sweat Senhora Capuz = 510g
	      		Sweat Criança Capuz = 365g
				Sweat Unisexo Simples = 375g
				Sweat Simples Criança = 310g
				Casaco = 900g
	        ========================================================= */


	    var ajustaPortes = function(casa){
	    	var arrayNomes = $(".itemRow .item-name").toArray();
	    	var arrayQuantidade = $(".itemRow .item-quantity").toArray();
	    	var line = 0;

	    	var valArtigos = 0;
	    	var valTotalPeso = 0;
	    	var valPortes = 0;

	    	$(arrayNomes).each(function(){
	    		if($(this).text() == "T-Shirt Unisexo"){
	    			valArtigos = 230;
	    		}else if($(this).text() == "T-Shirt Senhora"){
	    			valArtigos = 205;
	    		}else if($(this).text() == "T-Shirt Criança"){
	    			valArtigos = 130;
	    		}else if($(this).text() == "Sweat Capuz Unisexo"){
	    			valArtigos = 630;
	    		}else if($(this).text() == "Sweat Capuz Unisexo (2 Cores)"){
	    			valArtigos = 510;
	    		}else if($(this).text() == "Sweat Capuz Senhora"){
	    			valArtigos = 365;
	    		}else if($(this).text() == "Sweat Capuz Criança"){
	    			valArtigos = 375;
	    		}else if($(this).text() == "Sweat Simples Unisexo"){
	    			valArtigos = 310;
	    		}else if($(this).text() == "Casaco"){
	    			valArtigos = 900;
	    		}

	    		valTotalPeso = valTotalPeso + valArtigos * $(arrayQuantidade[line]).text();

	    		line++;
	    	});

    		var totalArtigos = $(".simpleCart_total").toArray();

    		if(casa == true){ //Se for para entregar em casa
	    		if($(totalArtigos[1]).text().split("€")[1] > 50){
	    			valPortes = 0;
	    		}else{

	    			if(valTotalPeso < 500){
		    			valPortes = 3.25;
		    		}else if(500 < valTotalPeso < 2000){
		    			valPortes = 5.50;
		    		}
	    		}
    		}else{ //Se for para entregar na MarcoBrinde
    			valPortes = 0;
    		}

	    	return valPortes;
	    }
