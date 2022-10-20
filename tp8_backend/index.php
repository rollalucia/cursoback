<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico Clase 8</title>
</head>

<body>
    <h1>Base de Datos de la tiendaDeRopa </h1>

    <h2>Ejercicio 2.a</h2>
    <table border="1">
        <tr>
            <td>Tipo de prenda</td>
            <td>Marca</td>
            <td>Talle</td>
            <td>Precio</td>
        </tr>
        <?php
        $conexion = mysqli_connect("127.0.0.1", "root", "", "tiendaderopa");

        $consulta = "SELECT * FROM `ropa`";

        $datos = mysqli_query($conexion, $consulta);


        while ($fila = mysqli_fetch_array($datos, MYSQLI_ASSOC)) {

        ?>
            <tr>
                <td><?php echo $fila["prenda"] ?></td>
                <td><?php echo $fila["marca"] ?></td>
                <td><?php echo $fila["talle"] ?></td>
                <td><?php echo $fila["precio"] ?></td>
            </tr>
        <?php
        }

        ?>
    </table>



    <h2>Ejercicio 2.b</h2>


    <table border="1">
        <tr>
            <td>Tipo de prenda</td>
            <td>Marca</td>
            <td>Talle</td>
            <td>Precio</td>
        </tr>

        <?php
        $consulta = "SELECT * FROM `ropa` WHERE `prenda` = 'buzo'";
        $datos = mysqli_query($conexion, $consulta);

        while ($fila = mysqli_fetch_array($datos, MYSQLI_ASSOC)) {

        ?>
            <tr>
                <td><?php echo $fila["prenda"] ?></td>
                <td><?php echo $fila["marca"] ?></td>
                <td><?php echo $fila["talle"] ?></td>
                <td><?php echo $fila["precio"] ?></td>
            </tr>
        <?php
        }


        ?>


    </table>

    <h2>Ejercicio 2.c</h2>
    <table border="1">
        <tr>
            <td>Tipo de prenda</td>
            <td>Marca</td>
            <td>Talle</td>
            <td>Precio</td>
        </tr>
    </table>
    <?php 
    $consulta = "SELECT * FROM `ropa` WHERE `marca` = `nike`"
    $datos = mysqli_query($conexion, $consulta);


    while ($fila = mysqli_fetch_array($datos, MYSQLI_ASSOC)) {

        ?>
         <tr>
                <td><?php echo $fila["prenda"] ?></td>
                <td><?php echo $fila["marca"] ?></td>
                <td><?php echo $fila["talle"] ?></td>
                <td><?php echo $fila["precio"] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <h2>Ejercicio 2.c</h2>
    <table border="1">
        <tr>
            <td>Tipo de prenda</td>
            <td>Marca</td>
            <td>Talle</td>
            <td>Precio</td>
        </tr>
    </table>
    <?php 
    $consulta = "SELECT * FROM `ropa` WHERE `precio` > 500"
    $datos = mysqli_query($conexion, $consulta);


    while ($fila = mysqli_fetch_array($datos, MYSQLI_ASSOC)) {

        ?>
         <tr>
                <td><?php echo $fila["prenda"] ?></td>
                <td><?php echo $fila["marca"] ?></td>
                <td><?php echo $fila["talle"] ?></td>
                <td><?php echo $fila["precio"] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    
</body>

</html>