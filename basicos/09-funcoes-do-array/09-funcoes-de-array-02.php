<?php //aula 16

//array_values($array) = retorna um novo array com os valores do array passado como parâmetro.
$nomes = array("Pai"=>"carlos","Mae"=>"maria");
//passa valores do array $nomes para o array $valor
$valor = array_values($nomes); 
print_r($valor);//exibe carlos e maria


//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////


// array_merge($array1, $array2) = agrega o conteúdo dos dois arrays.
$carros = array("camaro","uno","gol");
$motos = array("pop100","50cc");
//fundi valores dos dois arrays
$veiculos = array_merge($carros,$motos);
echo $veiculos[4];//exibe o ultimo valor do array


//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////


//array_pop($array) = exlui a ultima posição do array.
$numeros = array(1,2,3);
//mostra o item a ser excluido
echo array_pop($numeros);
echo "<br>";

//exclui o ultimo valor do array
array_pop($numeros);
echo "<br>";

print_r($numeros);


//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////


//array_shift($array) = exclui a primeira posição do array.
$numeros_2 = array(4,5,6);
//mostra o item a ser excluido
echo array_pop($numeros_2);
echo "<br>";

//exclui o primeiro valor do array
array_pop($numeros_2);
echo "<br>";

print_r($numeros_2);