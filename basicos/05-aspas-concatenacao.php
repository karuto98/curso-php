<?php //aula 08
/* 		aspas simples e compostas		*/
$nome = 'rodrigo';

echo 'meu nome é $nome';//exibe: meu nome é $nome
echo "meu nome é $nome";//exibe: meu nome é rodrigo

echo "<hr>";

/*		concatenação		*/
echo 'meu nome'.$nome;
//exibe: meu nome é rodrigo
echo 'meu nome'.$nome. 'e minha idade é 23';
//exibe: meu nome é rodrigo e minha idade é 23
echo 'meu nome é \'rodrigo\'';
//exibe: meu nome é 'rodrigo'