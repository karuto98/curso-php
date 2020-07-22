<?php //aula 08
//		compostos	

//array
 $carros = array("gol","uno","camaro");
 var_dump($carros);//mostra detalhes sobre a var $carros

$minhas_informacoes = array("rodrigo",23,1.79,true);

var_dump($minhas_informacoes);
if(is_string($carros)):
	echo "é um array";
	//se a var $array for uma array ele retorna a msn acima
else:
	echo "nao e uma array";
	//se a var $array nao for uma array ele retorna a msn acima
endif;
echo "<hr>";



/*object 
class Cliente{
	public  $nome;
	public function atribuir_nome($nome){
		this.$nome = $nome;
	}
}

$cliente = new Cliente();
Cliente->atribuir_nome("rodrigo");

var_dump($cliente);
if(is_object($cliente)):
	echo "é um object";
	//se a var $cliente for uma object ele retorna a msn acima
else:
	echo "nao e uma object";
	//se a var $cliente nao for uma object ele retorna a msn acima
endif;
echo "<hr>";
*/