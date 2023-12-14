<?php

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$direccion = $_POST['direccion'];
$tel = $_POST['tel'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje .= "Nombre " . $nombre . " \r\n";
$mensaje .= "Tel: " . $tel . " \r\n";
$mensaje .= "E-mail: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'contacto@lmn.mx';
$asunto = 'Comentarios Web';

mail($para, $asunto, utf8_decode($mensaje), $header);

$para1 = 'correo@dominio';

mail($para1, $asunto, utf8_decode($mensaje), $header);



?>
<body background="imagenes/fondo1.png" style="background-position:top; background-repeat:no-repeat">
<div id="logo">

      <center><img src="imagenes/logo.png" width="250" height="80" border="0" alt="boton"/></center>
               
</div>

<p align="center">Su mensaje ha sido enviado correctamente, pronto nos pondremos en contacto con usted.</p> 
<p align="center"> </p> 
<p><span style="color:red;font-size:150%;font-weight:bold;"><?php print $email; ?></span></p> 

<p align="center">Si no es correcto, 

<script type='text/javascript'> 

document.write('<a href="javascript:history.go(-1);">vuelve atras</a>'); 

</script> 

<noscript>vuelve atras</noscript> y envialo de nuevo</p>

</body>