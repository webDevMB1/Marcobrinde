<!DOCTYPE html>
<html>
<head>

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

	<title>ADMIN - MarcoBrinde</title>
</head>

<style type="text/css">
	#logout{
		text-decoration: none;
		color: black;
		border: solid 1px black;
		padding-top: 5px;
		padding-bottom: 5px;
	}

	#logout:hover{
		color: white;
		background-color: black;
	}
</style>

<body>

	<!-- ROW Logo -->
	<div id="rowLogo" class="row">
		<a href="http://www.marcobrinde.com/admin"><img id="logoImg" src="../images/index/10l.png" alt="logo" height="110" style="padding-bottom: 10px"></a>
	</div>

	<div class="container">
		<div class="row">
			<center><h2>ADMINISTRAÇÃO - LOJA ONLINE</h2></center>
			<br>
			<center><a href="javascript:;" class="btn btn-lg simpleCart_empty" width="100%" style="border-radius: 0" id="logout">LOGOUT</a></center>
		</div>

		<div id="linhaButtons" class="row">
			<div class="col-md-4">
				<label id="labelRecDest" class="labelHover labelActiveIndex"><input class="hidden" type="radio" name="seccao" checked="checked" onclick="location.href = 'refreshInicial';">Actualizar recentes / destaques</label>
			</div>
			<div class="col-md-4">
				<label id="labelAddSeccao" class="labelHover labelActiveIndex"><input class="hidden" type="radio" name="seccao" onclick="location.href = 'addSeccao';">Adicionar Secção Nova</label>
			</div>
			<div class="col-md-4">
				<label id="labelAddTransfer" class="labelHover labelActiveIndex"><input class="hidden" type="radio" name="seccao" onclick="location.href = 'addTransfer';">Adicionar Novo Transfer</label>
			</div>
		</div>

		<div id="segundaLinhaButtons" class="row">
			<div class="col-md-4">
				<label id="labelDelSeccao" class="labelRedHover labelActiveRedIndex"><input class="hidden" type="radio" name="seccao" checked="checked" onclick="location.href = 'delSeccao';">Eliminar Secção</label>
			</div>
			<div class="col-md-4">
				<label id="labelDelSeccao" class="labelRedHover labelActiveRedIndex"><input class="hidden" type="radio" name="seccao" checked="checked" onclick="location.href = 'delTransfer';">Eliminar Transfer</label>
			</div>
		</div>

	</div>

	<footer id="footerIndex">
		<div class="linhaFooter"></div>
	    <p id="copyright">© 2017 MarcoBrinde</p>
	</footer>


</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</html>

<script type="text/javascript">

	$(window).load(function(){

		$("#logout").click(function(){
			window.location.replace("logout");
		});

	});

</script>
