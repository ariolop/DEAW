<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        #error_reporting(0);

        $enviar = $_REQUEST["enviar"];

        if(isset($enviar))
        {
            echo "<h1>Resultados de formulario</h1>";
            $nombre = $_REQUEST['nombre'];
            $apellidos = $_REQUEST['apellidos'];
            $tel = $_REQUEST['tel'];
            $definicion = $_REQUEST['definicion'];
            $eleccion = $_REQUEST['eleccion'];
            $diasSemana = $_REQUEST['diasSemana'];
            $lenguajeProg = $_REQUEST['lenguajeProg'];

            echo "Hola ".$nombre." ".$apellidos."<br>";
            echo "Los dias de la semana son: ";

            //Bucle for checkbox
            for ($i=0; $i < count($diasSemana); $i++) 
            { 
                echo $diasSemana[$i]."\n";    
            }

            echo "<br>";
            echo "Los dias de la semana son: ";
            
            //Bucle foreach checkbox
            foreach ($diasSemana as $dia) {
                echo $dia."\n"; 
            }
            
            echo "<br>";
            echo "Los lenguajes de programacion son: ";

            //Bucle for SELECT multiple
            for ($i=0; $i < count($lenguajeProg); $i++) 
            { 
                echo $lenguajeProg[$i]."\n";
            }

            echo "<br>";
            echo "Los lenguajes de programacion son: ";

            //Bucle foreach SELECT multiple
            foreach ($lenguajeProg as $lenguaje) {
                echo $lenguaje."\n"; 
            }

            echo "<br>";
            echo "<a href='index.php'>Volver al inicio</a>";
        }
        else
        {
        ?>
            <h1>Registrate en Bootcamp</h1>
            <form action="index.php" method="get">
                <table> 
                    <tr>
                        <td>
                            <label for="nombre">Nombre: </label>
                        </td>
                        <td>
                            <input name="nombre" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="apellidos">Apellidos: </label>
                        </td>
                        <td>
                            <input name="apellidos" type="text">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tel">Telefono: </label>
                        </td>
                        <td>
                            <input name="tel" type="tel">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="definicion">¿Cómo te definirias?: </label>
                        </td>
                        <td>
                            <textarea name="definicion" rows="5" cols="30"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="eleccion">¿A qué bootcamp te registras?: </label>
                        </td>
                        <td>
                            <input type="radio" name="eleccion" value="PS">Programacion de Software<br>
                            <input type="radio" name="eleccion" value="MME">Montaje y mantenimiento de equipos<br>
                            <input type="radio" name="eleccion" value="DW">Desarrollo web<br>
                            <input type="radio" name="eleccion" value="CS">Ciberseguridad
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="diasSemana[]">¿Qué día/s de la semana te gustaría asistir?: </label>
                        </td>
                        <td>
                            <input type="checkbox" name="diasSemana[]" value="Lunes">Lunes<br>
                            <input type="checkbox" name="diasSemana[]" value="Martes">Martes<br>
                            <input type="checkbox" name="diasSemana[]" value="Miercoles">Miercoles<br>
                            <input type="checkbox" name="diasSemana[]" value="Jueves">Jueves<br>
                            <input type="checkbox" name="diasSemana[]" value="Viernes">Viernes<br>
                            <input type="checkbox" name="diasSemana[]" value="Sabado">Sabado<br>
                            <input type="checkbox" name="diasSemana[]" value="Domingo">Domingo
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lenguajeProg">¿Tienes algún lenguaje de programación favorito?: </label>
                        </td>
                        <td>
                            <select multiple="3" name="lenguajeProg[]">
                                <option value="Javascript">JavaScript</option>
                                <option value="PHP">PHP</option>
                                <option value="Java">Java</option>
                                <option value="Python">Python</option>
                                <option value="C#">C#</option>
                                <option value="C++">C++</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <input type="submit" value="enviar" name="enviar"> <br>
                <input type="reset" value="reiniciar" name="reiniciar">
            </form>        
    <?php
        }
    
    ?>


</body>
</html>