<?php
echo "Trabajo práctico 4 <br>" ;
echo "Ejercicio 1 <br>" ; 

$i = 1 ;
while ($i <= 100) {
    print "<p>$i</p>" ;
    $i++ ;
}
echo "Ejercicio 2 <br>" ;
$i = 100 ;
while ($i > 0) {
    print"<p>$i</p>" ;
    $i-- ;

}

echo "Ejercicio 3 <br>" ;

$i = 2 ;
while ($i <= 100 && $i % 2 == 0) {
    print "<p>$i</p>" ;
    $i = $i + 2 ;
}


echo "Ejercicio 4 <br>" ;

$i = 1 ;
while ($i <= 100 && $i % 2 != 0) {
    print "<p>$i</p>" ;
    $i = $i + 2 ;
}


echo "Ejercicio 5 <br>" ;

$i = 1 ;
$suma = 0 ;
while ($i <= 20) {
   $suma = $suma + $i ;
   $i++ ;
}
print"$suma<br>";

echo "Ejercicio 6 <br>" ;

$i = 2 ;
$suma = 0 ;
while ($i <= 20 && $i % 2 == 0) {
   $suma = $suma + $i ;
   $i = $i + 2 ;
}
print"$suma<br>";
