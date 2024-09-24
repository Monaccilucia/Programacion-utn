<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Array
$array = [ 1, "hola", true ];
$array[0] = 2;
$array[4] = "Matias";

$i = 0;

$a = 100 / $i;


print_r($array);

// Comentario de una linea
$array[] = "Matias"; 

/*
Comentarios en mas de una linea
*/

$variable = "Matias" . "Basile";
$i = 0;
$i++; // $i = $i + 1;
$i--; // $i = $i - 1;

$i = $i + 10;
$i += 10;

$variable = "Matias";
$variable .= "Basile"; // $variable = $variable . "Basile"

for($i = 0; $i < 10; $i++) {

}

function miFuncion($parametros) {
  return 0;
}
echo "llega";
?>