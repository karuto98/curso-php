<?php //aula 10
//escobo global
$nome = "rodrigo";

function exibeNome(){
	//para que a variavel possa ser acessada fora da function
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";

//////////////////////////////////////////////////////////////
function exibeCidade(){
	// escopo local

	//para que a variavel possa ser acessada fora da function
	global $cidade;
	$cidede = "rio";
}
exibeCidade();
echo $cidade;
echo "<hr>";

//////////////////////////////////////////////////////////////
$a = 1;
$b = 3;
$c = 7;

function soma(){
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();