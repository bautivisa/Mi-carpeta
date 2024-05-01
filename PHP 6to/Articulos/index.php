<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo2.css">
    <title>Tienda de BOX</title>
</head>
<body>

<?php
    $conexion = new mysqli('localhost', 'root', '', 'mi base de datos');

    if(!$conexion){
        echo $conexion->error;
    }

    if($conexion){
        $consulta = "SELECT * From Articulos";
        $resultado = mysqli_query($conexion,$consulta);

        if($resultado){
            while($row = $resultado->fetch_array()){
                $precio1 = $row['precio1'];
                $precio2 = $row['precio2'];
                $precio3 = $row['precio3'];
                $precio4 = $row['precio4'];
            }
        }
    }
?>
        <table>
            <tr class="titulos">
                <th>Nombre del Producto</th>
                <th>Descripcion</th>
                <th>Representacion</th>
                <th>Precio</th>
             </tr>
            <tr>
                <td class="modelo">PUÑO DEL DEMONIO</td>
                <td class="descripcion"><p>Estos guantes de boxeo están diseñados para resistir el impacto constante de los entrenamientos de alta intensidad. Fabricados con cuero de alta calidad y acolchado de espuma de múltiples capas, proporcionan una excelente protección para tus manos y muñecas. Son ideales para golpear sacos pesados y realizar sparring, ofreciendo un equilibrio perfecto entre protección y durabilidad.</p></td>
                <td><img src="guante1.jpg"></td>
                <td class="modelo"><?php echo "$",$precio1;?></td>
            </tr>
            <tr>
                <td class="modelo">PUÑO CELESTIAL</td>
                <td class="descripcion"><p>Los guantes de competición son ligeros y ajustados, diseñados para maximizar la velocidad y precisión de tus golpes durante una pelea. Están fabricados con materiales de alta calidad y cuentan con una construcción ergonómica que se adapta perfectamente a tus manos. Estos guantes cumplen con las regulaciones de peso y tamaño establecidas por las organizaciones de boxeo y son esenciales para competir a nivel profesional.</p></td>
                <td><img src="guante2.jpg"></td>
                <td class="modelo"><?php echo "$",$precio2;?></td>
             </tr>
            <tr>
                <td class="modelo">GTX PRO 2 </td>
                <td class="descripcion"><p>Estos guantes son ideales para la práctica del sparring, ya que están diseñados para brindar una protección excepcional tanto para ti como para tu compañero de entrenamiento. Con un acolchado suave pero efectivo, minimizan el riesgo de lesiones mientras permiten un contacto controlado. Además, su diseño ergonómico garantiza un ajuste cómodo y seguro durante las sesiones de sparring.</p></td>
                <td><img src="guante3.png"></td>
                <td class="modelo"><?php echo "$",$precio3;?></td>
             </tr>
            <tr>
                <td class="modelo">EL MARFIL</td>
                <td class="descripcion"><p>Estos guantes están diseñados específicamente para entrenamientos aeróbicos y ejercicios de fitness que involucran el uso de sacos de boxeo o almohadillas. Son livianos y brindan una protección adecuada para tus manos y muñecas durante sesiones de ejercicios de alta energía. Están hechos de materiales transpirables que evitan la acumulación de sudor y permiten una experiencia de entrenamiento cómoda y fresca.</p></td>
                <td><img src="guante4.jpg"></td>
                <td class="modelo"><?php echo "$",$precio4;?></td>
             </tr>
        </table>
         
</body>
</html>


 