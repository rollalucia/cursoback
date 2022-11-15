<?php

$conexion = mysqli_connect("127.0.0.1", "root", "", "tiendaderopa");

// Guardamos el id enviado en el listado
$id = $_GET['id'];


// Preparamos consulta
$consulta = "SELECT * FROM `ropa` WHERE `id`=$id";

// Ejecutamos orden y guardamos el resultado en una variable 
$respuesta = mysqli_query($conexion, $consulta);
$datos = mysqli_fetch_array($respuesta);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $prenda = $datos["prenda"];
    $marca = $datos["marca"];
    $talle = $datos["talle"];
    $precio = $datos["precio"];
    $imagen = $datos["imagen"];
    ?>

    <h2>Modificar producto</h2>
    <p>Ingrese los nuevos datos de la prenda</p>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">Prenda</label>
        <input type="text" name="prenda" placeholder="Prenda" id="" value="<?php echo $prenda ?>">
        <label for="">Marca</label>
        <input type="text" name="marca" placeholder="Marca" id="" value="<?php echo $marca ?>">
        <label for="">Talle</label>
        <input type="text" name="talle" placeholder="Talle" id="" value="<?php echo $talle ?>">
        <label for="">Precio</label>
        <input type="text" name="precio" placeholder="Precio" id="" value="<?php echo $precio ?>">
        <label>Imagen</label>
        <input type="file" name="imagen" placeholder="imagen">

        <input type="submit" name="guardar_cambios" value="Guardar Cambios">
        <button type="submit" name="Cancelar" formaction="index.html">Cancelar</button>


    </form>
    <?php
    // Si se clickea guardar cambios ejecutar metodo post
    if (array_key_exists('guardar_cambios', $_POST)) {
        $conexion =  mysqli_connect("127.0.0.1", "root", "", "tiendaderopa");

        // Traemos los datos del POST
        $prenda = $_POST['prenda'];
        $marca = $_POST['marca'];
        $talle = $_POST['talle'];
        $precio = $_POST['precio'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

        // Preparamos la orden
        $consulta = "UPDATE ropa SET prenda='$prenda', marca='$marca', talle ='$talle', precio='$precio', imagen='$imagen' WHERE id=$id";

        // Ejecutar orden 
        mysqli_query($conexion, $consulta);

        // Redirigir a index
        header('location:index.html');
    }
    ?>
</body>

</html>