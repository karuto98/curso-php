<?php //aula 32
//super globais
/* 
	$GLOBALS		aqui
	$_SERVER		aqui
	$_REQUEST		
	$_POST
	$_GET
	$_FILES
	$_ENV
	$_COOKIE
	$_SESSION
*/

//$GLOBALS array que armazena todas as variaveis, usada para pegar uma variavel pode qualquer lugar do script.
$x = 10;
$y = 15;

function soma(){
	echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();


/////////////////////////////
echo "<hr>";
/////////////////////////////


//$_SERVER contem infomações sobre o servidor como: nome,ip,locais de scripts...
echo $_SERVER['PHP_SELF'] ."<br>";			//nome do arq do script
echo $_SERVER['SERVER_NAME'] ."<br>";		//nome do host do servidor
echo $_SERVER['SCRIPT_FILENAME'] ."<br>";	//caminho do script
echo $_SERVER['DOCUMENT_ROOT'] ."<br>";		//diretório raiz do script
echo $_SERVER['SERVER_PORT'] ."<br>";		//porta do servidor
echo $_SERVER['REMOTE_ADDR'] ."<br>";		//endereço ip onde o user esta visualizando 