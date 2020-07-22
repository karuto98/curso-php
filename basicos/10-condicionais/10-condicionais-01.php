<?php //aula 19
$numero = 10;

if($numero == 10)://se a  condição for vendadeira
	echo "numero é igual a 10";
elseif($numero <= 9)://caso foi igual ou menor a 9
	echo "numero menor igual a 9";
else://caso nao for verdadeira
	echo "numero nao e 10";
endif;


/////////////////////////////
echo "<hr>";
/////////////////////////////


//operador ternário
$media = 7;
//caso a media for igual a 5 aprova, caso contrario reprova
echo ($media == 7) ? "Aprovado" : "Reprovado";