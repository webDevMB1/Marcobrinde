<?php
	if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['telefone']) && !empty($_POST['moradaFatura1']) && !empty($_POST['localFatura']) && !empty($_POST['codePostalFatura']) && !empty($_POST['codePostalFatura2']) && !empty($_POST['nif']) && !empty($_POST['moradaEnvio']) && !empty($_POST['localEnvio']) && !empty($_POST['codePostalEnvio1']) && !empty($_POST['codePostalEnvio2'])){
		send_email("compras.marcobrinde@gmail.com");
		send_email_cliente($_POST['email']);
	}

	function send_email($para){

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		//$headers .= "De: " . strip_tags($_POST['email']) . "\r\n";
		$headers .= "Responder para: ". strip_tags($_POST['email']) . "\r\n";

		$assunto = "Encomenda MarcoBrinde Loja Online";

		$corpo = '<html><body>';
		$corpo .= '<h4>Encomenda número: ' . $_POST['numeroEncomenda'] . '</h4><br>';
		$corpo .= "<h4><strong>Dados do cliente</strong> <h4><br></br>";
		$corpo .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$corpo .= "<tr><td><strong>Nome</strong> </td><td>" . strip_tags($_POST['nome']) . "</td></tr>";
		$corpo .= "<tr><td><strong>Email</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
		$corpo .= "<tr><td><strong>Telefone</strong> </td><td>" . strip_tags($_POST['telefone']) . "</td></tr>";
		$corpo .= "<tr><td><strong>Morada Faturação</strong> </td><td>" . strip_tags($_POST['moradaFatura1']) . ", " . strip_tags($_POST['localFatura']) . ", " . strip_tags($_POST['codePostalFatura']) . "-" . strip_tags($_POST['codePostalFatura2']) . "</td></tr>";
		$corpo .= "<tr><td><strong>NIF</strong> </td><td>" . strip_tags($_POST['nif']) . "</td></tr>";
		$corpo .= "<tr><td><strong>Morada Envio</strong> </td><td>" . strip_tags($_POST['moradaEnvio']) . ", " . strip_tags($_POST['localEnvio']) . ", " . strip_tags($_POST['codePostalEnvio1']) . "-" . strip_tags($_POST['codePostalEnvio2']) . "</td></tr>";
		$corpo .= "<tr><td><strong>Detalhes</strong> </td><td>" . htmlentities($_POST['mDetalhes']) . "</td></tr>";
		$corpo .= "</table>";
		$corpo .= "<h4><strong>Pedido</strong> <h4><br></br>";
		$corpo .= '<div style="width:65%">' . $_POST['artigos'] . '</div><br></br>';
		$corpo .= '<h4>Valor Total (portes incluidos): ' . $_POST['valCompra'] . '€</h4>';
		$corpo .= "</body></html>";


		if(mail($para, $assunto, $corpo, $headers)){
			echo("<script> alert('Encomenda pronta para envio!');
				window.location = 'http://www.marcobrinde.com'</script>");
		}else{
			echo("<script> alert('Falha no envio!');
				window.location = 'http://www.marcobrinde.com'</script>");
		}
	}


	function send_email_cliente($para){

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		//$headers .= "De: " . strip_tags($_POST['email']) . "\r\n";
		//$headers .= "Responder para: ". strip_tags($_POST['email']) . "\r\n";

		$assunto = "Encomenda MarcoBrinde Loja Online";

		$corpo = '<html><body>';
		$corpo .= '<h4>Encomenda número: ' . $_POST['numeroEncomenda'] . '</h4><br>';
		$corpo .= "<h4><strong>Dados do cliente</strong> <h4><br></br>";
		$corpo .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		$corpo .= "<tr><td><strong>Nome</strong> </td><td>" . strip_tags($_POST['nome']) . "</td></tr>";
		$corpo .= "<tr><td><strong>Email</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
		$corpo .= "<tr><td><strong>Telefone</strong> </td><td>" . strip_tags($_POST['telefone']) . "</td></tr>";
		$corpo .= "<tr><td><strong>Morada Faturação</strong> </td><td>" . strip_tags($_POST['moradaFatura1']) . ", " . strip_tags($_POST['localFatura']) . ", " . strip_tags($_POST['codePostalFatura']) . "-" . strip_tags($_POST['codePostalFatura2']) . "</td></tr>";
		$corpo .= "<tr><td><strong>NIF</strong> </td><td>" . strip_tags($_POST['nif']) . "</td></tr>";
		$corpo .= "<tr><td><strong>Morada Envio</strong> </td><td>" . strip_tags($_POST['moradaEnvio']) . ", " . strip_tags($_POST['localEnvio']) . ", " . strip_tags($_POST['codePostalEnvio1']) . "-" . strip_tags($_POST['codePostalEnvio2']) . "</td></tr>";
		$corpo .= "<tr><td><strong>Detalhes</strong> </td><td>" . htmlentities($_POST['mDetalhes']) . "</td></tr>";
		$corpo .= "</table>";
		$corpo .= "<h4><strong>Pedido</strong> <h4><br></br>";
		$corpo .= '<div style="width:65%">' . $_POST['artigos'] . '</div><br></br>';
		$corpo .= '<h4><strong>Valor Total </strong>(portes incluidos):  €' . $_POST['valCompra'] . '<h4>';
		$corpo .= "</body></html>";


		if(mail($para, $assunto, $corpo, $headers)){
			echo("<script> alert('Email enviado!');
				window.location = 'http://www.marcobrinde.com'</script>");
		}else{
			echo("<script> alert('Falha no envio!');
				window.location = 'http://www.marcobrinde.com'</script>");
		}
	}


?>
