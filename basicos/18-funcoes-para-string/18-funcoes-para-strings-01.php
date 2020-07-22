<?php //aula 28
//funcoes para string
/* 
   strtoupper   
   strtolower   
   substr   	
   str_pad 		
*/

//strtoupper converte para maiusculo
$nome = "rodrigo";
$novoNome = strtoupper($nome);
echo $novoNome;


/////////////////////////////
echo "<hr>";
/////////////////////////////


//strtolower coverte para minusculo
$fruta = "MORANGO";
$novaFruta = strtolower($fruta);
echo $novaFruta;


/////////////////////////////
echo "<hr>";
/////////////////////////////


//substr
$mensagem = "ola mundo";
echo substr($mensagem, 4,6); //entre o 4 arg e 6 arg


/////////////////////////////
echo "<hr>";
/////////////////////////////


//str_pad complementa uma outra string com a quantidade de caracteres
$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7); //add dois espaçoes "mouse  ";
echo $novoObjeto ."<br>";
$novoObjeto = str_pad($objeto, 7,"*"); //add "mouse**";
echo $novoObjeto ."<br>";
$novoObjeto = str_pad($objeto, 7,"*",STR_PAD_LEFT); //add "**mouse" na esquerda;
echo $novoObjeto."<br>";
$novoObjeto = str_pad($objeto, 7,"*",STR_PAD_BOTH); //add "**mouse**" nos dois lados;
echo $novoObjeto."<br>";
