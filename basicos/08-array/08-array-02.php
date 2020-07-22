<?php //aula 13

//array
$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";

//count
//mostra quantos elementes tem no array
echo count($clientes);//exibe 3
$totalCliente = count($clientes);
echo "<hr>";

//foreach
foreach ($clientes as $cliente) {
	//percorre cada elemento e diz seu valor
	echo $cliente. "<br>";
}