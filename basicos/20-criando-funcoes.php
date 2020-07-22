<?php //aula 31
//criando funcoes

function exibirNome($nome){
	echo "meu nome e $nome";
}

exibirNome("pablo");


/////////////////////////////
echo "<hr>";
/////////////////////////////


function calcularMedia($nome,$n1,$n2,$n3,$n4){
	$media = ($n1 + $n2 + $n3 + $n4) / 4;
	if($media >= 7):
		echo "$nome foi aprovado com a media $media. <br>";
	else:
		echo "$nome foi reprovado BURRAO =c, $media <br>";
	endif;
}
calcularMedia("paulao",5,7,8,6);
calcularMedia("yasmin",10,8,9,10);