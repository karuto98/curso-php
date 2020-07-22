<!DOCTYPE html>
<html>

<?php
if(isset($_POST['enviar'])){
	$formatosPermitidos = array("png","jpg","gif","jpeg");

	$quatidadeAquivos = count($_FILES["arquivo"]['name']);
	$contador = 0;

	while($contador < $quatidadeAquivos){
	$extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
	
	if(in_array($extensao,$formatosPermitidos)){
		$pasta = "arquivos/";
		$temporario = $_FILES['arquivo']['tmp_name'][$contador];
		$novoNome = uniqid().".$extensao";

		if(move_uploaded_file($temporario, $pasta.$novoNome)){
			echo "upload feito com sucesso para $pasta.$novoNome <br>";
		} else {
			echo "erro no upload $temporario <br>";
		}
	} else {
		echo "$extensao invalida <br>";
	}
	$contador++;
	}
}
?>

<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
	<input type="file" name="arquivo[]" multiple> <br>
	<input type="submit" name="enviar">
</form>

</body>
</html>