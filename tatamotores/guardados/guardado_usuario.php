<?php
$conexion = new mysqli('localhost', 'root', '', 'concesionaria');

if(!$conexion){
    echo $conexion->error;
}
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_de_nacimiento = $_POST['nacimiento'];
$dni = $_POST['dni'];
$email = $_POST['email'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo " <br>El email '$email' es válido.</br>";
    $consulta = "INSERT INTO usuario(Nombre, Apellido, `Fecha de nacimiento`, DNI, Email) VALUES('$nombre', '$apellido', '$fecha_de_nacimiento', '$dni','$email')";
    $conexion->query($consulta);
    echo"Datos Enviados";
} 
else {
    echo "<br>El email '$email' no es válido.</br>";
}

?>