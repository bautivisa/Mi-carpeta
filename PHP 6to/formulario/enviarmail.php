<!-- <?php

$nomApell = $_POST["NomApell"];
$dni = $_POST["DNI"];
$comentario = $_POST["comentario"];




?> -->
 <?php
if(isset($_POST['Email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "bautista970visalli@gmail.com";
$email_subject = "Correo de tu Formulario Web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['NomApell']) ||
 !isset($_POST['Email']) ||
 !isset($_POST['Comentario'])||
 !isset($_POST['DNI']))
{
echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre y Aperllido: " . $_POST['NomApell '] . "\n";
$email_message .= "E-mail: " . $_POST['Email'] . "\n";
$email_message .= "DNI: " . $_POST['DNI'] . "\n";
$email_message .= "Comentarios: " . $_POST['Comentario'] . "\n\n";

// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?> 
 