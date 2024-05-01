<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="conexion.php">
      
        <label for="nombre">NOMBRE</label>
        <input type="text" name="nombre">
        <br><br>
        <label for="fecha">FECHA</label>
        <input type="date" name="fecha">
        <br><br>
        <label for="hora">HORA</label>
        <select name="hora">
            
            <?php

                for($i=9; $i<=20; $i++)
                {
                    echo "<option value='$i:00'>$i:00</option>";
                    echo "<option value='$i:30'>$i:30</option>";
                }
            ?>

        </select>
        <br><br>
        <label for="telefono">CONTACTO</label>
        <input type="tel" name="telefono">
        <br><br>
        <input type="submit">
        <br><br>
        <input type="reset">
        
    </form>  
    
    <br><br>
    <a href="eliminar.php">Eliminar turno</a>
    <br><br>
    <a href="eliminar.php">Modificar turno</a>

</body>
</html>
