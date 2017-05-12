<?php
	
	var_dump("File: ");
	var_dump( $_FILES );

	var_dump("Post: ");
	var_dump($_POST);
	
	if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], '../images/transfers/'. $_POST['seccao'] .'/'. $_POST['versao'] .'/' . $_FILES['file']['name']);
    }

?>