<?php 
	$destinatario = filter_input(INPUT_POST, 'destino');
	$asunto = filter_input(INPUT_POST, 'asunto');
	$mensaje = filter_input(INPUT_POST, 'mensaje');


	if (mail($destino, $asunto,$mensaje)){
		require 'confirm.php';
	}
?>