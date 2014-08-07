<?php
	$exito  = "" ; 
	require_once 'swift/swift_required.php';
	if($_POST['correo']){

		$correo = $_POST['correo'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$pais = $_POST['pais'];
		$ciudad = $_POST['ciudad'];
		$lugarvisita = $_POST['lugarvisita'];
		$comentarios = $_POST['comentarios'];
		if ($lugarvisita==1) {
			$planta="Guayaquil";
		}
		else if($lugarvisita==2){
			$planta="Quito";
		}
		$myArray = explode(',', $correo);
		
		// Create the SMTP configuration
		$transport = Swift_MailTransport::newInstance();

		// Create the message
		$message = Swift_Message::newInstance();
		$message->setTo(array("barbara.palacios@ec.sabmiller.com" => "Bárbara Palacios"));
		// $message->setTo(array("ycosquillo@celmedia.com" => "Yuri Cosquillo"));
		// $message->setCc(array("hlomas@celmedia.com" => "Henry Lomas A."));
		// $message->setBcc(array("ggomez@celmedia.com" => "Gabriel Gomez"));
		$cuerpo =  "\xA"."Se ha llenado el formulario de visita a Planta". "\xA";
		$cuerpo .= "A continuación los datos"."\xA";
		$cuerpo .= "Nombre:" . $nombre . "\xA";
		$cuerpo .= "Apellidos:" . $apellido . "\xA";
		$cuerpo .= "Correo: " . $correo . "\xA";
		$cuerpo .= "Pais: " . $pais . "\xA";
		$cuerpo .= "Ciudad: " . $ciudad . "\xA";
		$cuerpo .= "Planta a visitar: " . $planta . "\xA";
		$cuerpo .= "Comentario: " . $comentarios . "\xA";
		$cuerpo .= "";

		$message->setSubject($nombre." Solicita una visita");
		$message->setBody(""."\xA".$cuerpo);
		$message->setFrom("info@cervecerianacional.ec");


		// $attachment= $codigo.".mp3";
		// $target_path = "assets/uploads/";

		// Add the original filename to our target path.  

		// $target_path = $target_path . basename($attachment);
		// $message->attach(Swift_Attachment::fromPath($target_path)->setFilename('Cantico.mp3'));

		// Send the email
		$mailer = Swift_Mailer::newInstance($transport);
		$mailer->send($message, $failedRecipients);
		$exito  = "<div class='textocentrado subtitulo'>Sus datos se han enviado con éxito un representante de Cerveceria Nacional se pondrá en contacto con usted</div>" ; 
		// $exito  = true ; 
		

		// Show failed recipients
		///echo($failedRecipients);
	}else{
		$exito = '<span class="error">Ingrese Todos los datos</span>';
	}


	echo ($exito);
?>