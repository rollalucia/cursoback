<?php 
echo "Trabajo Práctico 5 <br>" ;

echo "<br>Ejercicio 1 <br>" ;

$numpar = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20] ;

foreach ($numpar as $valor) {
    print "$valor <br>" ;
}

echo "<br>Ejercicio 2 <br>" ;

$matriz = ["Pedro", "Ana", 34, 1];

print_r($matriz);


echo "<br>Ejercicio 3 <br>" ;

$datos = [
    'Nombre' => "Pedro",
    'Apellido' => "Torres",
    'Dirección' => "Av. Mayor 3703",
    'Teléfono' => "1122334455" 
];

echo "<br>Ejercicio 4 <br>" ;

$ciudades =["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

foreach($ciudades as $indice => $valor) {
    print "La ciudad con el índice $indice tiene el nombre $valor <br>" ;
}

echo "<br>Ejercicio 5 <br>" ;

$ciudades =['MD' => "Madrid", 'BCL' => "Barcelona", 'LD' => "Londres", 'NY' => "New York", 'LA' => "Los Ángeles", 'CHG' => "Chicago"];

foreach($ciudades as $indice => $valor) {
    print "El índice de $valor es $indice <br>" ; 
}
