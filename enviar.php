<?php
$destino = "ejemplo@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " .$nombre . "\nCorreo: " .$correo . "\nTelefono: " . $telefono . "\nAsunto: " . $asunto . "\nMensaje" . $mensajes;
mail($destino, "Contacto", $contenido);
header("Location: enviado.html");
?>