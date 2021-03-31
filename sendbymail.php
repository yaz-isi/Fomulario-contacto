<?php
if(isset($_POST['email'])) {

<bold>// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias</bold>
$email_to = "destinatario@sudominio.com"; //--Ingreso de dominio a donde se llevara la informacion--//
$email_subject = "Contacto desde el sitio web"; //--correo que se dejara en el formulario--//

<bold>// Aquí se deberían validar los datos ingresados por el usuario</bold>
if(!isset($_POST['fname']) ||
!isset($_POST['lname']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['subject'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['fname'] . "\n";
$email_message .= "Apellido: " . $_POST['lname'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['subject'] . "\n\n";


<bold>// Ahora se envía el e-mail usando la función mail() de PHP</bold>
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>