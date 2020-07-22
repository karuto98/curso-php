<?php //aula 30
//funcoes para numeros
/*
	number_format(number)
	round(val)
	ceil(value)
	floor(value)
	rand()
*/

//number_format formatar numeros
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "valor e R$ $preco";


/////////////////////////////
echo "<hr>";
/////////////////////////////


//round arredonda valores
echo round(3.6) ."<br>";
echo round(3.2);


/////////////////////////////
echo "<hr>";
/////////////////////////////


//ceil arredonda para cima
echo ceil(3.2);


/////////////////////////////
echo "<hr>";
/////////////////////////////


//floor arredonda para baixo
echo floor(3.6);


/////////////////////////////
echo "<hr>";
/////////////////////////////


//rand sorteia um numero
echo rand(1,20);