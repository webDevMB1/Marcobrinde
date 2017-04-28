<?php 

	$Items = $_POST['itemsPHP'];
	//echo 'CENAS' . $testeItem;

	$xml = "<?xml version='1.0' encoding='utf-8' ?> 
			<order> 
			    <userAccountId>9030986</userAccountId> 
			    <currency>EUR</currency> 
			    <label>MarcoBrinde Loja Online</label> 
			    <ageGroup>ALL</ageGroup> 
			    <categoryId>331</categoryId> 
			    <urlAcquital><![CDATA[http://www.marcobrinde.com/pagamento.php]]></urlAcquital> 
			    <urlOk><![CDATA[http://www.marcobrinde.com/final.php]]></urlOk> 
			    <urlCancel><![CDATA[http://www.marcobrinde.com/indexLoja.php]]></urlCancel> 
			    <urlInstall><![CDATA[http://www.marcobrinde.com/indexLoja.php]]></urlInstall> 
			    <urlLogo><![CDATA[http://www.marcobrinde.com/images/logo/logo.png]]></urlLogo> 
			 
			    <items> 
			    	". $Items ."
			    </items> 
			</order>";

		//echo $xml;
	 
	/* 
	 * Var $data com XML da compra 
	 */ 
	 $data = trim($xml); 
	 
	// chave Hipay
	$signKey = '64729a5b83d4cc3e461b6b3be67083dc'; 
	$encodedData = base64_encode($data); 
	$md5Sign = md5($encodedData.$signKey); 

	echo '<form target=\'_blank\' action=\'https://payment.hipay.com/index/form/\' method=\'post\' > 
		    <input type=\'hidden\' name=\'mode\' value=\'MODE_B\' /> 
		    <input type=\'hidden\' name=\'website_id\' value=\'394035\' /> 
		    <input type=\'hidden\' name=\'sign\' value='. $md5Sign .' /> 
		    <input type=\'hidden\' name=\'data\' value='. $encodedData .' /> 
		    <input type=\'image\' name=\'send\' src="https://www.hipaydirect.com/images/i18n/pt/bt_payment_8.png" /> 
		</form>';
	 
?>