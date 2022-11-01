<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tienda de Ropa</h1>
    <!-- Botón para listar  -->
    <form action="listar.php" method="post">
        <button type="submit">Listar</button>
    </form>
    <div style="display: flex; gap: 1rem;">
    <?php
    $conexion = mysqli_connect("127.0.0.1", "root", "", "tiendaderopa");

    $consulta = "SELECT * FROM `ropa`";
    $datos = mysqli_query($conexion, $consulta);

    while ($fila = mysqli_fetch_array($datos, MYSQLI_ASSOC)) {
        echo '<div style="display:flex; flex-direction: column; border: 1px solid black; border-radius: 10px;">' ;
        echo "<h3>{$fila['prenda']} {$fila['marca']}</h3>" ;
        echo  "<p>Talle {$fila['talle']}</p>" ;
        echo "<p> \${$fila['precio']}" ;
        echo "<a href='modificar.php?id={$fila['id']}'>Editar</a>" ;
        echo "<a href='eliminar.php?id={$fila['id']}'>Eliminar</a>" ;
        echo '</div>'; 
    }


    ?>
    </div>
</body>

</html>