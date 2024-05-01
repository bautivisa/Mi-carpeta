<?php
$conexion = new mysqli('localhost', 'root', '', 'mi base de datos');

if(!$conexion){
    echo $conexion->error;
}

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];

$consulta = "INSERT INTO persona(Nombre, Apellido, DNI) VALUES('$nombre', '$apellido', '$dni')";

$conexion->query($consulta);

echo"Datos Enviados";
?>
 