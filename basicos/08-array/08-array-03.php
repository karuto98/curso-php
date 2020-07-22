<?php //aula 14

//array associativo
$pessoa = array("nome"=> "Rodrigo", "idade" => 23);
//add nome: rodrigo e idada:23
echo $pessoa["nome"];//mostra o valor atribuido a nome
echo $pessoa["idade"];//mostra o valor atribuido a idade
$pessoa["cidade"] = "Itabuna"; //add cidade
print_r($pessoa);//exibe itens no array

foreach ($pessoa as $indice => $valor) {
	echo $indice. ":" .$valor. "<br>";
	/*exibe 
	nome:rodrigo
	idade:23
	altura:1.75
	cidade:itabuna
	*/
}

///////////////////////////////////////
echo "<hr>";

//array multidimensionais
$times = array(
	"cariocas"=> array("campeao"=>"vasco","vice"=>"flamengo"),
	"paulista"=> array("são paulo","santos"),
	"bahianos"=> array("bahia","vitoria"));
echo $times["paulista"][1];//exibe vasco
echo "<br>";

foreach ($times["cariocas"] as $indice => $valor) {
	echo $indice.":".$valor. "<br>";
	/*exibe
	campeao:vasco
	vice:flamengo
	*/
}