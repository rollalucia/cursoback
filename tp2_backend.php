<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctio 2</title>
</head>
<body>
<h1>Ejercicio 1</h1>
<?php 
    $numero = 5 ;
    if ($numero > 0) {
        echo "$numero es un número positivo";
    } 
    else {
    echo "$numero no es un número positivo";
    } 
?>
<h1>Ejercicio 2</h1>
<?php 
$numero = 4 ;
if ($numero > 1 && $numero < 10) {
    echo "$numero es mayor que 1 y menor que 10." ;
}
?>
<h1>Ejercicio 3</h1>
<?php 
$numero = 30;
if ($numero < 2 || $numero > 10 ) {
    echo "$numero es menor a 2 o mayor que 10" ;
}
?>

<h1>Ejercicio 4</h1>
<?php 
$numero1 = 10;
$numero2 = 20;

if ($numero1 > $numero2) {
    echo "Suma:" .($numero1 + $numero2), "<br>Resta:" .($numero1 - $numero2);
}
elseif ($numero1 < $numero2) {
    echo "Multiplicacicón:" .($numero1 * $numero2), "<br> División:" .($numero1 / $numero2), "<br> Resto de la división:" .($numero1 % $numero2);
}
else {
    echo "Los números ingresados son iguales.";
}
?>
</body>
</html>