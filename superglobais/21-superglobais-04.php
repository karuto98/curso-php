<html>
<body>

<?php
/* validação
Funções (filter_input)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL
*/
?>

<?php
	if(isset($_POST['enviar-form'])){
		//clicou no botao

		//array de erros
		$erros = array();

		//validações
		if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
			$erros[] = "idade precisa ser um inteiro";
		}
		if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
			$erros[] = "email invalido";
		}
		if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
			$erros[] = "peso precisa ser um float";
		}
		if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
			$erros[] = "ip invalido";
		}
		if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
			$erros[] = "url invalida";
		}

		//exibindo msn de erro
		if(!empty($erros)){
			//tem algum obj detro dela
			foreach ($erros as $erro) {
				echo "<li> $erro </li>";
			}
		} else {
			//caso nao tenha erros
			echo "dados corretos";
		}
	}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
	idade: <input type="text" name="idade"><br>
	email:<input type="email" name="email"><br>
	peso: <input type="text" name="peso"><br> 
	ip: <input type="text" name="ip"><br>
	url: <input type="text" name="url"><br>
	<button type="submit" name="enviar-form">enviar</button><br>
</form>

</body>
</html>