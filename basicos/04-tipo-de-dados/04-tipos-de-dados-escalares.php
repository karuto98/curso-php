<?php //aula 08
/*		escalares		*/
//string
$nome = "ola mundo";
var_dump($nome);//mostra o tipo da var $nome
if(is_string($nome)):
	echo "é uma string";
	//se a var $nome for uma string ele retorna a msn acima
else:
	echo "nao e uma string";
	//se a var $nome nao for uma string ele retorna a msn acima
endif;
echo "<hr>";

/*----------------------------------------------*/
//int
$idade = 27;//nao aceita num quebrados
var_dump($idade);
if(is_int($idade)):
	echo "é um inteiro";
	//se a var $idade for um int ele retorna msn acima
else:
	echo "nao e um inteiro";
	//se a var $idade nao for um int ele retorna msn acima
endif;
echo "<hr>";

/*----------------------------------------------*/
//float 
$altura = "fse";
var_dump($altura);
if(is_float($altura)):
	echo "é um numero irracional";
	//se a var $altura for um float ele retorna msn acima
else:
	echo "nao e um numero irracional";
	//se a var $altura nao for um float ele retorna msn acima
endif;
echo "<hr>";

/*----------------------------------------------*/
//boolean
$admin = false;
var_dump($admin);
var_dump($admin);
if(is_bool($admin)):
	echo "é um boolean";
	//se a var $admin for um boolean ele retorna msn acima
else:
	echo "nao e um boolean";
	//se a var $admin nao for um boolean ele retorna msn acima
endif;
echo "<hr>";
