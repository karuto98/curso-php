<!DOCTYPE html>
<html>

<?php
if(isset($_POST['enviar'])){
	$formatosPermitidos = array("png","jpg","gif","jpeg");
	$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
	
	if(in_array($extensao,$formatosPermitidos)){
		$pasta = "arquivos/";
		$temporario = $_FILES['arquivo']['tmp_name'];
		$novoNome = uniqid().".$extensao";

		if(move_uploaded_file($temporario, $pasta.$novoNome)){
			$mensagem = "upload feito com sucesso";
		} else {
			$mensagem = "erro no upload";
		}
	} else {
		$mensagem = "formato invalido";
	}

	echo $mensagem;
}
?>

<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo"> <br>
	<input type="submit" name="enviar">
</form>

</body>
</html>