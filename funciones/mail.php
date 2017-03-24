<?php 

	if(isset($_POST['correo']) && !empty($_POST['correo']) &&
		isset($_POST['asunto']) && !empty($_POST['asunto']) &&
		isset($_POST['contenido']) && !empty($_POST['contenido']))
	{
		$destino = 'g.juarez94@gmail.com';
		$desde = "From: ".$_POST['correo'];
		$asunto = $_POST['asunto'];
		$contenido = $_POST['contenido'];

		mail($destino, $asunto, $contenido);
	} else {
		echo "Lo sentimos, hubo un problema al enviar";
	}
		
		

?>