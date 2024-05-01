<html lang="en">
    <body>
        <form action="" method="post">
            <h3>NUMERO DE CONTACTO A ELIMINAR</h3>
            <input type="tel" name="contacto">
            <input type="submit" value="Eliminar">
            <a href="formulario.php">Volver al Inicio</a>
        </form>
    </body>

    <?php
        if(isset($_POST["contacto"])) //isset: es para verificar si existe un determinado dato
        {
            $conexion = new mysqli('localhost', 'root', '', 'peluqueria'); //conexion con la BD

            $contacto = $_POST["contacto"]; //toma el dato del formulario

            $sql = "SELECT * FROM turnos WHERE telefono = $contacto LIMIT 1"; //armo la consulta para la BD por turno que coincida el telefono

            $res = $conexion->query($sql); //ejecuta la consulta y guardo el resultado en res
                //debug = depurar el codigo
                //var_dup($res);

            if($res->num_rows == 0)
                {
                    echo "<h1>No existe turno con ese numero de telefono</h1>";
                }
            else
                {
                    //->fetch_assoc() = agarrar un registro y transformarlo en un arreglo. Toma como indice el nombre del campo de la BD
                    //->fetch_array() = toma como indice un numero posicion 1 = 0, etc.

                    $registro = $res->fetch_assoc();

                    echo "TURNO <hr><br>
                    fecha: $registro[fecha] <br>
                    hora: $registro[hora] <br>

                    ¿Estas seguro que quieres eliminar esto: $registro[nombre]?
                    <br>
                    <a href='?id=$registro[ID]'>SI</a>
                    <a href='formulario.php'>NO</a>";
                    // <a href='?id=$registro[ID//aqui va como tenemos el campo en la tabla]'>SI</a>
                }
        }
        
        if( isset($_GET["id"]))
            {
                $idsup=$_GET['id'];

                $conexion = new mysqli('localhost', 'root', '', 'peluqueria');

                $sql = "DELETE FROM turnos WHERE ID=$idsup";

                $conexion->query($sql);

                header('location: formulario.php');
            }
    
    ?>
    
</html>
