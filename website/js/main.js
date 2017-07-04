$(document).ready(function(){
	//Se estiver no mobile, esconde socials icons
	if ($(window).width() < 532) {
	   $("#divSocials").addClass("hidden");
	}else{
		$("#divSocials").removeClass("hidden");
	}
});

$(window).resize(function(){
	if ($(window).width() < 532) {
	   $("#divSocials").addClass("hidden");
	}else{
		$("#divSocials").removeClass("hidden");
	}
});

// Função para colocar cor branca no texto quando o fundo é escuro

	function checkFundoEscuro(){
		setTimeout(function(){
		  var array = $(".checkColor");
			$.each(array, function(){
				if($(this).hasClass("active")){
					$(this).find("p").removeClass("colorWhite");
					$(this).find("p").addClass("colorBlack");
				}else{
					$(this).find("p").removeClass("colorBlack");
					$(this).find("p").addClass("colorWhite");
				}
			});
		}, 100);
	}