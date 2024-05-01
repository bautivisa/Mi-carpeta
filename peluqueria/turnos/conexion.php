<?php
$conexion = new mysqli('localhost', 'root', '', 'peluqueria');

if(!$conexion){
    echo $conexion->error;
}
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$telefono = $_POST['telefono'];

$sql = "SELECT * FROM turnos WHERE fecha = '$fecha' AND hora = '$hora' ";
$res = $conexion->query($sql);

if($res->num_rows == 0){ //num_rows cuantas filas tienne el mismo dato 
            
    $consulta = "INSERT INTO turnos(nombre, fecha, hora, telefono) VALUES('$nombre', '$fecha', '$hora', '$telefono')";
    $conexion->query($consulta);

    echo"Datos Enviados";
    
    echo "<br><a href='formulario.php'>Volver al Inicio</a>";
}
else{
    echo"Este turno no esta disponible";
    echo "<br><a href='formulario.php'>Volver al Inicio</a>";
}

?>