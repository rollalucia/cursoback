<?php
$conexion = mysqli_connect("127.0.0.1", "root", "", "tiendaderopa");


// Guardo los datos ingresados por usuario en agregar.html
$prenda = $_POST['prenda'];
$marca = $_POST['marca'];
$talle = $_POST['talle'];
$precio = $_POST['precio'];
// $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


// Preparo orden SQL

$consulta = "INSERT INTO ropa (id, prenda, marca, talle, precio) VALUES ('', '$prenda', '$marca', '$talle', '$precio')" ;  


// Ejecuto consulta 

mysqli_query($conexion, $consulta);


// Finalizada la consulta volvemos al index
header('location: index.html');


?>