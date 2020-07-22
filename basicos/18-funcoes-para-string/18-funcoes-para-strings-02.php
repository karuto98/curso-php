<?php //aula 29
//funcoes para string
/*
   str_repeat
   strlen
   str_replace
   strpos
*/

//str_repeat repetir uma string
$string = str_repeat("sucesso <br>", 5);
echo $string;


/////////////////////////////
echo "<hr>";
/////////////////////////////


//strlen comprimento de uma string
$msn = "Olá mundo";
echo strlen($msn);


/////////////////////////////
echo "<hr>";
/////////////////////////////


//str_replace troca uma palavra num texto
$texto = "A seleção argentina sera campea na copa 2018.";
$novoTexto = str_replace("argentina","Brasileira",$texto);
echo $novoTexto;


/////////////////////////////
echo "<hr>";
/////////////////////////////


//strpos retorna a posicao da palavra no texto
$texto_2 = "chocolate e um doce muito bom";
echo strpos($texto_2,"doce");