<?php //aula 17

//array_unshift($array, "valor") = adiciona um ou mais elementos no início do array.
$frutas = array("uva","maçã","laranja");

print_r($frutas);//mostras itens do array
//add no comeco do array
array_unshift($frutas, "pera");

echo "<br>";

print_r($frutas);//mostras itens do array


//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////


//array_push($array, "valor1", "valor2") = adiciona um ou mais elementos no final do array.
$cidade = array("sp","rj");

print_r($cidade);//mostras itens do array
//add no final do array
array_push($cidade, "mg","pa");

echo "<br>";

print_r($cidade);//mostras itens do array


//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////


//array_combine($keys, $values) = mescla os dois arrays passados.
$keys = array("camepao","vice","terceiro");
$values = array("vasco","flamengo","santos");

//mescla os arrays add keys e values
$times = array_combine($keys, $values);
print_r($times);//mostras itens do array


//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////


//array_sum() = calcula a soma dos elementos de array.
$soma = array(5,6,10,8);
$total = array_sum($soma);//retorna total da soma dos valores
echo $total; //printa o valor total