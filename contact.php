<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$domicilio = $_POST['domicilio'];
$fechanacimiento = $_POST['fechanacimiento'];
$codigopostal = $_POST['codigopostal'];
$email = $_POST['email'];
$preguntasurf = $_POST['preguntasurf'];
$telefono = $_POST['telefono'];
$alergias = $_POST['alergias'];
$dni = $_POST['dni'];
$TallaNeopreno = $_POST['TallaNeopreno'];
$dnifecha = $_POST['dnifecha'];


if(mail('powerbi.test01@gmail.com', $name, $apellido, $domicilio, $fechanacimiento, $codigopostal, $email, $preguntasurf, $telefono, $alergias, $dni, $TallaNeopreno, $dnifecha)){
	echo "Formulario enviado!";
}else{ echo "Ups...hubo algún problema";
}
?>
