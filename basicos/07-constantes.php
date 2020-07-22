<?php //aula 11
//constantes

define("NOME","jose");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);

echo "NOME IDADE ALTURA CASADO";
var_dump(ALTURA);

//////////////////////////
echo "<hr>";

define("TIMES",['vasco', 'flamengo', 'santos']);
echo TIMES[0] ."<br>"; //exibe vasco

///////////////////////////
function exibeNome(){
	echo NOME;
}
echo NOME;//const são globais

