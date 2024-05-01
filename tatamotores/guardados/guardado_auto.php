<?php
$conexion = new mysqli('localhost', 'root', '', 'concesionaria');

if(!$conexion)
{
    echo $conexion->error;
}
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $tipo= $_POST['tipo'];
    $año = $_POST['año'];
    $precio = $_POST['precio'];
    $imagen = '';

    if(isset($_FILES["foto"]))
    {
        $file = $_FILES["foto"];
        $nombre = $file["nane"];
        $tipo = $file["type"];
        $ruta_provisional = $file["tmp_name"];
        $size = $file["size"];
        $dimensiones = getimagesize($ruta_provisional);
        $width = $dimensiones[0];
        $height = $dimensiones[1];
        $carpeta = "fotos/";
    if($tipo !='image/jpg' && $tipo !='image/JPG' && 
    $tipo !='image/jpeg' && $tipo !='image/png')
    {
        echo "Error: el archivo no es una imagen";
    }
    else if ($size > 3*1024*1024)
    {
        echo "Error: el archivo es muy pesado. Maximo 3MB";
    }
    else
    {
        $src = $carpeta.$nombre;
        move_uploaded_file($ruta_provisional, $src);
        $imagen ="fotos/".$nombre; 
        
        $consulta = "INSERT INTO vehiculo(marca, modelo, tipo, año, precio, imagen) VALUES('$marca', '$modelo', '$tipo', '$año', '$precio', '$imagen')";

        $conexion->query($consulta);
        echo "Datos Enviados";
    }

    }
   
?>