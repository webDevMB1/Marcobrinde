<?php
	if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['assunto']) && !empty($_POST['mensagem'])){
		send_email($_POST['nome'], "marcobrinde2@gmail.com", $_POST['assunto'], $_POST['mensagem']);
	}

	function send_email($de, $para, $assunto, $mensagem){

		$headers = 'De: ' . $de . "\r\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		if(mail($para, $assunto, $mensagem, $headers)){
			echo("<script> alert('Mensagem Enviada!');
				window.location = 'index.html'</script>");
		}else{
			echo("<script> alert('Falha no envio!'); 
				window.location = 'index.html'</script>");
		}
	}
?>