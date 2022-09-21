<?php
$usuario = $_POST["user"];
$contrasenia = $_POST["pass"];

$test_user = "admin" ;
$test_pass = "1234" ;

if ($usuario == $test_user && $contrasenia == $test_pass) {
    header ("location:bienvenido.html") ;
}
else  {
    header ("location:error.html") ; 
}