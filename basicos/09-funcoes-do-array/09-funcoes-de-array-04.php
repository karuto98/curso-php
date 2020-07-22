<?php //aula 18
//explode("/", "20/01/2001") = transforma strings em array.
$data = "30/02/2018";

//converte a data em array
$novaData = explode('/', $data);
print_r($novaData); /* printa 1=30 2=02 3=2018 */

$frase = "meu nome não é rodrigo";

$array = explode(" ",$frase);
print_r($array);/* printa 1=meu 2=nome 3=não 4=é 4=rodrigo */


//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////


//implode("-", $array) = transforma array em string.
$nomes = array("rodrigo", "carlos");

//converta o array para a string
$string = implode(", ", $nomes);
echo $string; /* printa rodrigo carlos */