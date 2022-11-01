<?php 

$conexion = mysqli_connect("127.0.0.1", "root", "", "tiendaderopa") ;

// Traemos la variable desde el listado de objetos
$id = $_GET['id']; 


// Generamos consulta para eliminar

$consulta = "DELETE FROM `ropa` WHERE `id`=$id";

// Ejecutamos consulta

mysqli_query($conexion, $consulta); 

// Al finalizar la consulta nos redirige al index

header('location: index.html');
?>