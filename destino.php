<?php

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require ('PHPMailer-master\src\PHPMailer.php');
require ('PHPMailer-master\src\Exception.php');
require ('PHPMailer-master\src\SMTP.php');
require ('contacto.php');

$nombre = $_POST['nombre'];
$mail = new PHPMailer();
$mail->IsSMTP();
    // 0 = off (producción)
    // 1 = client messages
    // 2 = client and server messages
$mail->SMTPDebug  = 0;
$mail->Host       = 'smtp.gmail.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username   = "clairemaquillaje@gmail.com";
$mail->Password   = "Contrasena1";
$mail->SetFrom('clairemaquillaje@gmail.com','Claire');
$mail->AddAddress($email = $_POST['correo']);
$mail->Subject = 'Su consulta sera atendida por un support muy pronto';
$mail->Body =
    "\n".'¡De parte de Claire queremos decirle que estamos al tanto sobre su Consulta!' .
    "\n".'Si alguno de estos datos no es correcto, por favor vuelva a contactos y reescriba los espacios en blanco.'.
    "\n".'Nombre:'. $_POST['nombre'].
    "\n".'Apellido: '. $_POST['apellido'].
    "\n".'Mail: '. $_POST['correo'] .
    "\n".'Telefono: '.$_POST['telefono'].
    "\n".'Area que desea contactar : '. $_POST['area_consulta'] .
    "\n".'Su consulta:' . $_POST['comentario'] .
    "\n".'©Anastasia Kim, Franco Motzo, Gonzalo Monzon, Paloma Stumpf';
if(!$mail->Send()) {
  echo '<script language="javascript">';
  echo 'alert("Surgió un error inesperado, inténtelo nuevamente.")';
  echo '</script>'; 
} else {
  echo '<script language="javascript">';
  echo 'alert("Se envió la consulta con total éxito.")';
  echo '</script>';
}

?>