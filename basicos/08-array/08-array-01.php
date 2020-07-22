<?php //aula 12
//array numerico

//lista de carros na garagem
$carros = array("BMW", "Veloster", "hilux");
print_r($carros);//exibe todos elementos do array
echo $carros[0];//exibe o elemento 0 do array

////////////////////////////
echo "<hr>";

//muda o índece do elemento no array
$marcas = array(1=>"nike",2=>"adidas");
$marcas[] = "puma";//insere no ultimo da lista
$marcas[5] = "lacoste";//insere na pos escolhida
echo $carros[2];//exibe elemento 2 do array

////////////////////////////
echo "<hr>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "honda";
print_r($motos);//exibe todos elementos do array