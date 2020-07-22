<html>
<body>

<?php
/* sanitização
Funções (filter_var)
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
*/
?>

<?php
	if(isset($_POST['enviar-form'])){
		//clicou no botao

		//sanitização
		//escapa todos os codigos html
		$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
		echo "$nome <br>";

		$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
		echo "$idade <br>";

		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
		echo "$email <br>";

		$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
		echo "$url <br>";	

		//exibindo msn de erro
		if(!empty($erros)){
			//tem algum obj detro dela
			foreach ($erros as $erro) {
				echo "<li> $erro </li>";
			}
		} else {
			//caso nao tenha erros
			echo " parabens, dados corretos";
		}
	}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	nome: <input type="text" name="nome"><br> 
	idade: <input type="text" name="idade"><br>
	email:<input type="email" name="email"><br>	
	url: <input type="text" name="url"><br>
	<button type="submit" name="enviar-form">enviar</button><br>
</form>

</body>
</html>