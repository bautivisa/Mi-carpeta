<?php
$conn = mysqli_connect("localhost", "root", "","concesionaria");
if (!$conn) {
die("Conexion fallida" . mysqli_connect_error());
}
echo "Conexion exitosa2";

mysqli_close($conn);  
?>

 