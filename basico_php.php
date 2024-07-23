<?php

echo "hola mundo\n";

//variables

$my_string = "esto es una cadema de texto" . "\n";

echo $my_string;
// para concatenar puedo colocar el . en vez de +
//el metodo gettype() me dice el tipo de dato

echo "el tipo de dato es " . gettype($my_string) ."\n";
// el tipado es dinamico 

$my_int = 3;
$my_double = 4.6;
$my_bool = true; //lo toma como el 1

echo $my_int + $my_double . "\n";
echo $my_bool + $my_double . "\n";

// La interpolacion (osea como los bactics es directo)

echo "el valor del double es $my_double \n";

//constantes
// Las constantes no llevan elsigno $ adelante pero SI va en mayuscula

const MY_CONSTANT = 4;
//MY_CONSTANT = 44;  la constante SIEMPRE sera constante.
echo MY_CONSTANT . "\n";

$my_array = [$my_bool, $my_int, $my_double];
echo "el tipo de dato de $my_array[0] es: " . gettype($my_array) . "\n";

//para anadir un elemento al array
array_push($my_array, 33);
echo $my_array[3] . "\n";

print_r($my_array) ."\n";

//diccionarios (objetos)
$my_dict = array("clave" => $my_string, "int" => $my_int, "constante" => MY_CONSTANT );

print_r($my_dict) . "\n";

echo "el valor de la clave int es $my_dict[int] ";