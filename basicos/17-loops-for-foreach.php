<?php //aula 27

for ($i=0; $i <= 10 ; $i++) { 
	echo "8 x $i = " .($i*8). "<br>";
}

echo "<hr>";

$cores = array("verde","vermelho","azul");
foreach ($cores as $indice => $cor) {
	echo "cor e $cor no indice $indice <br>";
}