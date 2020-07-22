<?php //aula 15

//is_array($array) = verifica se uma determinada variável é um array.
$nomes = array("rodrigo","felipe","maria","jose");
var_dump(is_array($nomes)); //exibe true


//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////


//in_array($valor, $array) 
//verifica se um determinado valor existe em alguma posição do array.
$nomes_2 = array("jorge","marco");
//verifica se no array $nomes existe o valor rodrigo
echo "caso for 1 então esta true <br>";
echo in_array("jorge", $nomes_2);//retorna true


//////////////////////////////////////////////
echo "<hr>";
//////////////////////////////////////////////


//array_keys($array) = retorna um novo arrays com as chaves do arrays passado como parâmetro.
$num = array("Pai"=>"carlos","Mae"=>"maria");
//passa keys do array $num para o array $keys
$keys = array_keys($num);
print_r($keys);//exibe valores Pai e Mae