<?php

	send_email($_POST['email']);

	function send_email($para){

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		//$headers .= "De: " . strip_tags($_POST['email']) . "\r\n";
		//$headers .= "Responder para: ". strip_tags($_POST['email']) . "\r\n";

		$assunto = "Pagamento Transferência MarcoBrinde Loja Online";

		$corpo = '<html><body>';
		$corpo .= '<h2><strong>Pagamento por transferencia bancaria</strong></h2>';
		$corpo .= '<h2>MarcoBrinde Loja Online</h2>';
		$corpo .= '<br><br/>';
		$corpo .= '<h4>Dados pagamento</h4>';
		$corpo .= '<h5>IBAN: PT004514244026382573529</h5>';
		$corpo .= '<h5>Nome do titular da conta: Marco Paulo Fernandes Crespo</h5>';
		$corpo .= '<h5>Valor a pagar: '. $_POST['valor'] .'</h5>';
		$corpo .= '<br><br/>';
		$corpo .= '<strong>NOTA</strong>';
		$corpo .= '<h4>1 - Após pagamento é obrigatório o envio do talão por email para "compras.marcobrinde@gmail.com".</h4>';
		$corpo .= '<h4>2 - O processo de produção só é iniciado após a conclusão do processo descrito na alinea anterior.</h4>';
		$corpo .= "</body></html>";


		if(mail($para, $assunto, $corpo, $headers)){
			echo("<script> alert('Email Enviado!');
				window.location = 'http://www.marcobrinde.com'</script>");
		}else{
			echo("<script> alert('Falha no envio!');
				window.location = 'http://www.marcobrinde.com'</script>");
		}
	}

?>
