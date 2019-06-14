<?php

$string = "pablo javier tobar hernandez";

echo $string[0];


// Produce: You should eat pizza, beer, and ice cream every day
$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);

echo $newphrase;


echo "<br>";

$arr = array('pablo', 'javier', 5);
$arr[] = 'hola';
array_push($arr, "mundo");
var_dump($arr);

echo "<br>";
$entrada = array("a" => "verde", "rojo", "b" => "azul", "azul", "rojo");
$resultado = array_unique($entrada);
var_dump($resultado);

echo "<br>";
$array = array(1, 2, 3, 4);
foreach ($array as $valor) {
    $arr2[] = $valor * 2;
}
// $array ahora es array(2, 4, 6, 8)
unset($valor); // rompe la referencia con el último elemento
var_dump($arr2);

echo "<br>";
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Existe Irix";
}
if (in_array("Mac", $os)) {
    echo "Existe mac";
}
 ?>
