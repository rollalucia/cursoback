<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Práctico 1</title>
</head>
<body>
    <h1>Inciso 1</h1>
   <?php 
   echo "Hola Mundo";
   ?>
   <h1>Inciso 2</h1> 
   <?php 
   $saludo = "Hola Mundo" ;
   echo $saludo ;
   ?>
   <h1>Inciso 3</h1>
   <?php 
   $numero1 = 100 ;
   $numero2 = 20 ;

    $suma = $numero1 + $numero2 ;
    $resta = $numero1 - $numero2 ;
    $multiplicacion = $numero1 * $numero2 ;
    $division = $numero1 / $numero2 ; 
    $modulo = $numero1 % $numero2 ;

    echo "Números enteros elegidos: $numero1 y $numero2 <br> Suma: $suma. <br> Resta: $resta. <br> Multiplicación: $multiplicacion. <br> División: $division. <br> Resto de la división: $modulo. " ;
   ?>

   <h1>Inciso 4</h1>
    <?php 
    $grados_celsius = 20;
    $grados_fahrenheit = ($grados_celsius * 1.8) + 32 ;
    echo $grados_fahrenheit;
    ?>

    <h1>Inciso 5</h1>
    <h2>Ejercicio a</h2>
    <?php 
    $altura_rectangulo = 12;
    $base_rectangulo = 18;
    $perimetro_rectangulo = (2*$base_rectangulo) + (2*$altura_rectangulo);
    $area_rectangulo = $base_rectangulo*$altura_rectangulo;

    echo "El perimetro del rectángulo es de $perimetro_rectangulo cm. <br> El área del rectángulo es de $area_rectangulo cm.";

    ?>

    <h2>Ejercicio b</h2>
    <?php 
    $radio_circ = 30;
    $perimetro_circ = 2 * pi() * $radio_circ;
    $area_circ = pi() * pow($radio_circ, 2);

    echo "Perímetro de la circunferencia: $perimetro_circ cm. <br> Área del círculo: $area_circ cm. <br>" ; 

    ?>

</body>
</html>